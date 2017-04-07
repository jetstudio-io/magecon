<?php

use Magecon\Mvc\Layout;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Session\Adapter\Redis as SessionAdapter;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Flash\Direct as Flash;

/**
 * Registering a router
 */
$di->setShared('router', function () {
    $router = new Router();

    $router->setDefaultModule('frontend');

    return $router;
});

/**
 * The URL component is used to generate all kinds of URLs in the application
 */
$di->setShared('url', function () {
    $config = $this->getConfig();

    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
});

/**
 * Redis component is used in session & cache
 */
$di->setShared('redis', function () {
    $redis = new \Redis();
    $redis->connect("127.0.0.1");
    return $redis;
});


/**
 * Starts the session the first time some component requests the session service
 */
$di->setShared('session', function () use ($di) {
    $redis = $di->get('redis');
    $session = new SessionAdapter(['redis' => $redis]);
    $session->start();

    return $session;
});

/**
 * Register the session flash service with the Twitter Bootstrap classes
 */
$di->set('flash', function () {
    return new Flash([
        'error'   => 'alert alert-danger',
        'success' => 'alert alert-success',
        'notice'  => 'alert alert-info',
        'warning' => 'alert alert-warning'
    ]);
});

/**
* Set the default namespace for dispatcher
*/
$di->setShared('dispatcher', function() {
    $dispatcher = new Dispatcher();
    $dispatcher->setDefaultNamespace('Magecon\Modules\Frontend\Controllers');
    return $dispatcher;
});


/**
 * Configure the Volt service for rendering .volt templates
 */
$di->setShared('voltShared', function ($view) {
    $config = $this->getConfig();

    $volt = new VoltEngine($view, $this);
    $volt->setOptions([
        'compiledPath' => function($templatePath) use ($config) {

            // Makes the view path into a portable fragment
            $templateFrag = str_replace($config->application->appDir, '', $templatePath);

            $cacheDir = dirname($config->application->cacheDir . 'volt' . DS . $templateFrag);
            if (!file_exists($cacheDir)) {
                mkdir($cacheDir, 0777, true);
            }

            return $config->application->cacheDir . 'volt/' . $templateFrag . '.php';
        }
    ]);

    return $volt;
});

$di->set('view', function() {
    $view = new Layout();
    $view->setDI($this);
    $view->setViewsDir(VIEW_PATH);

    $view->registerEngines([
        '.volt'  => 'voltShared',
        '.phtml' => PhpEngine::class
    ]);

    return $view;
});