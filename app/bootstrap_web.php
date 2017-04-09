<?php

use Phalcon\Di\FactoryDefault;

error_reporting(E_ALL);

include_once 'constants.php';
try {

    /**
     * The FactoryDefault Dependency Injector automatically registers the services that
     * provide a full stack framework. These default services can be overidden with custom ones.
     */
    $di = new FactoryDefault();

    /**
     * Include vendor packet
     */
    include VENDOR_PATH . DS . 'autoload.php';


    /**
     * Include general services
     */
    require APP_PATH . '/config/services.php';

    /**
     * Include Autoloader
     */
    include APP_PATH . '/config/loader.php';

    /**
     * Include Autoloader
     */
    include APP_PATH . '/config/loader_web.php';

    /**
     * Include web environment specific services
     */
    require APP_PATH . '/config/services_web.php';


    /**
     * Include routes
     */
    require APP_PATH . '/config/routes.php';

    $response = $application->handle();

    $response->send();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
