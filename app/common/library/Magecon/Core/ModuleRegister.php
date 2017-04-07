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
 * Time: 16:43
 */

namespace Magecon\Core;

use Phalcon\Application;
use Phalcon\Loader;

/**
 * Moduel auto-registration
 * Class ModuleRegister
 * @package Magecon\Core
 */
class ModuleRegister {

    const MODULE_CONFIG_PATH = 'config/modules/';

    public static function register(Application $application, $area = 'web') {
        $config = $application->getDI()->get('config');
        $modules = [];
        $classes = [];
        foreach ($config->{$area}->modules as $name => $module) {
            $modules[$module['name']] =[
                'className'     => $module['class'],
                'path'      => APP_PATH . DS . $module['path'] . "/Module.php"
            ];
            $classes[$module['class']] = $config->application->appDir . $module['path'] . "/Module.php";
        }
        $application->registerModules($modules);

        $loader = new Loader();
        $loader->registerClasses($classes);
        $loader->register();
    }

    //
    protected static function _coreRegister() {

    }
}