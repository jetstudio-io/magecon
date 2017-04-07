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
/**
 * @author Nguyen Van Thiep
 * Date: 07/04/2017
 * Time: 01:39
 */

namespace Magecon\Core\Configuration;

use Magecon\Core\Configuration\Traits\Loader;
use Phalcon\Config;
use Phalcon\Di\FactoryDefault;

class LayoutLoader implements LoaderInterface {

    const MODULE_LAYOUT_PATH = '/configs/layout/';
    use Loader;
    /**
     * Load layout config
     * @param \Phalcon\Di\FactoryDefault $di
     * @param array                      $params
     */
    public function processConfig(FactoryDefault $di, $params = ['area' => 'frontend']) {
        // Load layout for frontend by default
        if (!isset($params['area'])) {
            $params['area'] = 'frontend';
        }

        //Load layout config file in all frontend module
        $config = $di->get('config');
        if (isset($config->layout)) {
            $globalLayout = $config->layout;
        } else {
            $globalLayout = new Config([]);
        }

        foreach ($config->{$params['area']}->modules as $name => $module) {
            $configFile = $module['path'] . self::MODULE_LAYOUT_PATH . $params['area'] . '.php';
            $moduleLayout = $this->_getConfig($configFile);
            $globalLayout->merge($moduleLayout);
        }
        $config->layout = $globalLayout;
        $di->setShared('config', $config);
    }

}