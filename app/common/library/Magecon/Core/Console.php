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
 * Date: 25/03/2017
 * Time: 21:27
 */

namespace Magecon\Core;

use Phalcon\Cli\Console\Extended as BaseConsole;

class Console extends BaseConsole {
    public function handle(array $arguments = null) {
        $currentModule = $this->_defaultModule;
        if (isset($arguments['module']) && $arguments['module']) {
            $currentModule = $arguments['module'];
        }

        // Update dispatcher namespace
        $module = $this->_modules[$currentModule];
        $namespace = str_replace('Module', 'Tasks', $module['className']);
        $this->di->get('dispatcher')->setNamespaceName($namespace);

        // Auto register other module
        foreach ($this->_modules as $modueName => $module) {
            if ($currentModule != $modueName) {
                /** @var \Phalcon\Mvc\ModuleDefinitionInterface $moduleInstance */
                $moduleInstance = new $module['className']();
                $moduleInstance->registerAutoloaders();
                $moduleInstance->registerServices($this->di);
            }
        }
        parent::handle($arguments);
    }
}