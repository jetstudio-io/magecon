<?php
/**
 * Copyright (c) 2017 MageCon
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Phalcon\Session\Adapter;

use Phalcon\Session\Adapter;
use Phalcon\Session\AdapterInterface;
use Phalcon\Session\Exception;

/**
 * Macosxvn\Session\Adapter\Redis
 * Redis adapter for Phalcon\Session
 */
class Redis extends Adapter implements AdapterInterface {
    const SESSION_ID_PREFIX = "PHPREDIS_SESS:";
    /**
     * Current session data
     *
     * @var string
     */
    protected $data;

    protected $_host = "127.0.0.1";

    protected $_port = "6379";

    protected $_db = 1;

    /**
     * @var \Redis
     */
    protected $_redis;

    /**
     * Class constructor.
     *
     * @param  array     $options
     * @throws Exception
     */
    public function __construct($options = null)
    {
        if (!isset($options['redis']) || !$options['redis'] instanceof \Redis) {
            throw new Exception(
                'Parameter "redis" is required and it must be an instance of Redis (phpredis extension)'
            );
        }
        $this->_redis = $options['redis'];

        if (isset($options['db'])) {
            $this->_db = $options['db'];
        }

        unset($options['redis'], $options['db']);

        parent::__construct($options);

        session_set_save_handler(
            [$this, 'open'],
            [$this, 'close'],
            [$this, 'read'],
            [$this, 'write'],
            [$this, 'destroy'],
            [$this, 'gc']
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return boolean
     */
    public function open()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @param  string $sessionId
     * @return string
     */
    public function read($sessionId)
    {
        $this->_redis->select($this->_db);

        $key = self::SESSION_ID_PREFIX . $sessionId;

        $sessionData = $this->_redis->hGetAll($key);

        if (!isset($sessionData['data'])) {
            return '';
        }

        $this->data = $sessionData['data'];
        return $sessionData['data'];
    }

    /**
     * {@inheritdoc}
     *
     * @param  string $sessionId
     * @param  string $sessionData
     * @return bool
     */
    public function write($sessionId, $sessionData)
    {
        if ($this->data === $sessionData) {
            return true;
        }

        $key = self::SESSION_ID_PREFIX . $sessionId;

        $sessionData = [
            '_id'      => $sessionId,
            'modified' => time(),
            'data'     => $sessionData
        ];

        $this->_redis->select($this->_db);

        $this->_redis->hMset($key, $sessionData);
        $this->_redis->zAdd(self::SESSION_ID_PREFIX . 'modified', time(), $key);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function destroy($sessionId = null)
    {
        if (is_null($sessionId)) {
            $sessionId = $this->getId();
        }

        $key = self::SESSION_ID_PREFIX . $sessionId;

        $this->data = null;

        $this->_redis->select($this->_db);

        $remove = $this->_redis->del($key);

        return (bool) $remove;
    }

    /**
     * {@inheritdoc}
     * @param string $maxLifetime
     */
    public function gc($maxLifetime)
    {
        $minAge = time() - $maxLifetime;

        $this->_redis->select($this->_db);

        $keys = $this->_redis->zRangeByScore(self::SESSION_ID_PREFIX . 'modified', 0, $minAge);
        $remove = $this->_redis->del($keys);

        return (bool) $remove;
    }
}
