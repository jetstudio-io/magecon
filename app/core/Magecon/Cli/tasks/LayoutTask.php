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
 * Date: 24/03/2017
 * Time: 15:38
 */

namespace Magecon\Cli\Tasks;

use Magecon\Core\Output;
use Magecon\Template\Block\Container;
use Phalcon\Cli\Task as TaskBase;

/**
 * Link module views folder to global views folder
 * Command:
 * php run cli:layout [--hardlink]
 * Class MigrationTask
 * @package Magecon\Cli
 */

class LayoutTask extends TaskBase {

    public function mainAction() {
        $config = $this->_dependencyInjector->get('config');
        // Create link for frontend & backend view
        foreach (['frontend', 'backend'] as $area) {
            if (!file_exists(VIEW_PATH . $area)) {
                mkdir(VIEW_PATH . $area, 0755, TRUE);
            }
            foreach ($config->{$area}->modules as $name => $module) {
                if (!file_exists(VIEW_PATH . $area . DS . $name)) {
                    $this->_createViewLink($area, $module);
                }
            }
        }
    }

    /**
     * @param string $area
     * @param array  $module
     */
    protected function _createViewLink($area = 'frontend', $module = []) {
        /** @var Output $output */
        $output = $this->_dependencyInjector->get('output');
        $target = APP_PATH . DS . $module['path'] . DS . 'views' . DS . $area;
        $link = VIEW_PATH . $area . DS . $module['name'];
        if (file_exists($target)) {
            $result = symlink($target, $link);
            if ($result) {
                $output->println("Created link " . $module['name']);
            } else {
                $output->println("Create link error : " . $module['name']);
            }
        } else {
            $output->println("Target not exist : " . $target);
        }
    }
}