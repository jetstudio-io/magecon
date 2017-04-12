<?php
/**
 * Copyright (c) 2017  MageCon
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
 * @author NGUYEN Van Thiep
 * Date: 24/03/2017
 * Time: 16:45
 */

namespace Magecon\Core;

use Phalcon\Di\FactoryDefault;
use Phalcon\Config as PhalconConfig;
use Phalcon\Config\Adapter\Ini as ConfigIni;
use Phalcon\Config\Adapter\Json as ConfigJson;
use Phalcon\Config\Adapter\Yaml as ConfigYaml;
use Magecon\Core\Configuration\Traits\Loader;

/**
 * Config auto-loader
 * Class ConfigLoader
 * @package Magecon\Core
 */
class ModuleConfigLoader {

    use Loader;

    const MODULE_CONFIG_PATH = APP_PATH . DS . 'config/modules/';
    const ALLOW_EXTENSION = ['php', 'ini', 'json', 'yml'];
    const ALLOW_AREAS = ['cli', 'frontend', 'backend', 'api'];

    protected $_di;

    public function __construct(FactoryDefault $di) {
        $this->_di = $di;
        $this->autoload();
    }

    public function autoload() {
        //@TODO load config from cache
        //$cache = $di->get('cache');

        /** @var PhalconConfig $globalConfig */
        $globalConfig = $this->_di->get(\SERVICES::CONFIG);
        $configDir = opendir(self::MODULE_CONFIG_PATH);
        while ($file = readdir($configDir)) {
            if (is_file(self::MODULE_CONFIG_PATH . $file) && self::_isConfigFile($file)) {
                $config = self::_getConfig(self::MODULE_CONFIG_PATH . $file);
                if (isset($config->module)) {
                    $module = $config->module;
                    unset($config->module);
                    foreach ($module->areas as $area) {
                        if (!isset($globalConfig->{$area})) {
                            $globalConfig->{$area} = new PhalconConfig(['modules' => [$module->name => $module]]);
                        } else {
                            $globalConfig->{$area}->modules[$module->name] = $module;
                        }
                    }
                }
                $globalConfig->merge($config);
            }
        }
        $this->_di->setShared(\SERVICES::CONFIG, $globalConfig);
    }

    /**
     * @param string $configName
     * @param array  $params
     *
     * @return array
     */
    public function loadModuleConfig($configName = 'layout', $params = []) {
        $loaderClass = 'Magecon\Core\Configuration\\' . ucfirst($configName) . 'Loader';
        if (class_exists($loaderClass)) {
            /* @var $loaderInstance \Magecon\Core\Configuration\LoaderInterface */
            $loaderInstance = new $loaderClass();
            return $loaderInstance->processConfig($this->_di, $params);
        } else {
            return [];
        }
    }
}