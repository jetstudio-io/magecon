<?php
namespace Magecon\Adminhtml;

use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;


class Module implements ModuleDefinitionInterface {
    /**
     * Registers an autoloader related to the module
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'Magecon\Adminhtml\Controllers' => __DIR__ . '/controllers/',
            'Magecon\Adminhtml\Block' => __DIR__ . '/blocks/',
        ]);

        $loader->register();

        /**
         * Register router
         */

        /* @var $router \Phalcon\Mvc\Router */
        $router = $di->get(\SERVICES::ROUTER);
        $module = 'core_adminhtml';
        if (!$router->wasMatched()) {
            $namespace = 'Magecon\Adminhtml\Controllers';
            $router->add('/admin', [
                'namespace' => $namespace,
                'module' => $module,
                'controller' => 'index',
                'action' => 'index',
            ])->setName(\ROUTER::ADMIN_DASHBOARD);
            $router->add('/admin/:params', [
                'namespace' => $namespace,
                'module' => $module,
                'controller' => 'index',
                'action' => 'index',
                'params' => 1
            ]);
            $router->add('/admin/:controller/:params', [
                'namespace' => $namespace,
                'module' => $module,
                'controller' => 1,
                'action' => 'index',
                'params' => 2
            ]);
            $router->add('/admin/:controller/:action/:params', [
                'namespace' => $namespace,
                'module' => $module,
                'controller' => 1,
                'action' => 2,
                'params' => 3
            ]);

            $router->setDefaults([
                'module' => $module,
                'controller' => 'index',
                'action' => 'notFound'
            ]);
        }
    }

    /**
     * Registers services related to the module
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di)
    {
    }
}
