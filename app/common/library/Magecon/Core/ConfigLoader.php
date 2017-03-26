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

/**
 * Config auto-loader
 * Class ConfigLoader
 * @package Magecon\Core
 */
class ConfigLoader {

    const MODULE_CONFIG_PATH = 'config/modules/';
    const ALLOW_EXTENSION = ['php', 'ini', 'json', 'yml'];

    public static function autoload(FactoryDefault $di) {

        //@TODO load config from cache
        //$cache = $di->get('cache');

        $configPath = APP_PATH . DS . self::MODULE_CONFIG_PATH;

        /** @var PhalconConfig $globalConfig */
        $globalConfig = $di->get('config');
        $configDir = opendir($configPath);
        while ($file = readdir($configDir)) {
            if (is_file($configPath . $file) && self::_isConfigFile($file)) {
                $config = self::_getConfig($configPath . $file);
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
        $di->setShared('config', $globalConfig);
    }

    /**
     * Check if file name is match config patten Company_Module.{php|ini|json|yml}
     * @param $filename
     *
     * @return PhalconConfig|bool
     */
    protected static function _isConfigFile($filename) {
        if (($match = preg_match("/^[A-Z]([^_]*)_[A-Z]([^_]*)\.([^.]*)$/", $filename, $filepart))) {
            $extension = $filepart[3];
            if (!in_array($extension, self::ALLOW_EXTENSION)) {
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    protected static function _getConfig($filePath) {
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        switch ($extension) {
            case "php":
                return include $filePath;
                break;
            case 'ini':
                return new ConfigIni($filePath);
                break;
            case 'json':
                return new ConfigJson($filePath);
                break;
            case 'yml':
                return new ConfigYaml($filePath);
                break;
        }
    }
}