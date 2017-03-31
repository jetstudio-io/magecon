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
 * Date: 30/03/2017
 * Time: 17:50
 */

namespace Magecon\Mvc;

use Phalcon\Mvc\Application as PhalconApplication;

class Application extends PhalconApplication {
    /**
     * Override Phalcon application to load module register
     *
     * @param null $uri
     *
     * @return bool|\Phalcon\Http\ResponseInterface|void
     */
    public function handle($uri = null) {

        $currentModule = $this->_defaultModule;
        if (isset($arguments['module']) && $arguments['module']) {
            $currentModule = $arguments['module'];
        }

        // Auto register other module
        foreach ($this->_modules as $modueName => $module) {
            if ($currentModule != $modueName) {
                /** @var \Phalcon\Mvc\ModuleDefinitionInterface $moduleInstance */
                $moduleInstance = new $module['className']();
                $moduleInstance->registerAutoloaders();
                $moduleInstance->registerServices($this->di);
            }
        }
        parent::handle($uri);
    }

}