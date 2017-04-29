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
 * Date: 09/04/2017
 * Time: 17:54
 */

namespace Magecon\Mvc\Application\Event\Manager;

use Phalcon\Events\Event,
    Phalcon\Mvc\Application,
    Phalcon\Loader,
    Phalcon\Mvc\User\Plugin;

class ModuleAutoLoader extends Plugin{

    /**
     * @var string
     */
    protected $_area = 'frontend';

    /**
     * @var Application
     */
    protected $_application = null;

    /**
     * Hook to event beforeHandleRequest to load all modules registered
     *
     * @param Event $event
     * @param Application $application
     */
    public function boot(Event $event, Application $application) {

        if ($this->_isAdmin()) {
            $this->_area = 'backend';
            $this->getDI()->get(\SERVICES::VIEW)->switchToAdmin();
            $config = $this->getDI()->get(\SERVICES::CONFIG);
            $config->area = 'backend';
            $this->getDI()->setShared(\SERVICES::CONFIG, $config);
        }

        $this->_application = $application;

        $this->_registerModule();

        $this->_autoLoader();

//        print_r($_SERVER['REQUEST_URI']);die;
    }

    protected function _isAdmin() {
        $config = $this->getDI()->get(\SERVICES::CONFIG);
        $uri = $_SERVER['REQUEST_URI'];
        if ($uri == $config->application->backendUriPrefix) {
            return true;
        }
        $uriPrefix = str_replace("/", "\/", $config->application->backendUriPrefix);
        return preg_match("/^" . $uriPrefix . '\//', $uri);
    }

    protected function _registerModule() {
        $config = $this->_application->getDI()->get(\SERVICES::CONFIG);
        $modules = [];
        $classes = [];
        foreach ($config->{$this->_area}->modules as $name => $module) {
            $modules[$module['name']] =[
                'className'     => $module['className'],
                'modulePath'      => APP_PATH . DS . $module['modulePath']
            ];
            $classes[$module['className']] = $config->application->appDir . $module['modulePath'] . "/Module.php";
        }
        $this->_application->registerModules($modules);

        $loader = new Loader();
        $loader->registerClasses($classes);
        $loader->register();
    }

    protected function _autoLoader() {
        // Auto register other module
        foreach ($this->_application->getModules() as $modueName => $module) {
            /** @var \Magecon\Mvc\ModuleAbstract $moduleInstance */
            $moduleInstance = new $module['className']();
            $moduleInstance->registerAutoloaders($this->_application->getDI());
            $moduleInstance->registerServices($this->_application->getDI());
        }
    }
}