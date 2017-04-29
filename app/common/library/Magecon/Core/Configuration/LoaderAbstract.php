<?php
/**
 * Copyright (c) 2017 magecon
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

/**
 * @author Nguyen Van Thiep
 * Date: 16/04/2017
 * Time: 00:38
 */

namespace Magecon\Core\Configuration;


use Magecon\Core\Configuration\Traits\Loader;
use Phalcon\Config;
use Phalcon\Di\FactoryDefault;

abstract class LoaderAbstract implements LoaderInterface {

    use Loader;

    const ALLOW_EXTENSION = ['php', 'ini', 'json', 'yml'];
    const ALLOW_AREAS = ['cli', 'frontend', 'backend', 'api'];

    /**
     * Config zone: MUST be defined in inherited class
     * @var string
     */
    protected $_config = 'config_zone';

    /**
     * Area: frontend | backend
     * @var string
     */
    protected $_area = 'frontent';

    /**
     * Load layout config
     * @param \Phalcon\Di\FactoryDefault $di
     * @param array                      $params
     */
    public function processConfig(FactoryDefault $di, $params = []) {
        // Load layout for frontend by default
        if (isset($params['area']) && in_array($params['area'], self::ALLOW_AREAS)) {
            $this->_area = $params['area'];
        }
        $this->_loadConfig($di);
    }

    protected function _loadConfig(FactoryDefault $di) {
        //Load layout config file in all frontend module
        $config = $di->get(\SERVICES::CONFIG);
        if (isset($config->{$this->_area}->{$this->_config})) {
            $globalConfig = $config->{$this->_area}->{$this->_config};
        } else {
            $globalConfig = new Config([]);
        }

        foreach ($config->{$this->_area}->modules as $name => $module) {
            $configFile = APP_PATH . DS . $module['modulePath'] . "/configs/" . $this->_area . "/{$this->_config}.php";
            if (file_exists($configFile)) {
                $moduleConfig = $this->_getConfig($configFile);
                $globalConfig->merge($moduleConfig->{$this->_config});
            }
        }
        $config->{$this->_area}->{$this->_config} = $globalConfig;
        //Update config service
        $di->setShared(\SERVICES::CONFIG, $config);
    }
}