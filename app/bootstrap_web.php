<?php

use Phalcon\Di\FactoryDefault;

error_reporting(E_ALL);

define("DS", DIRECTORY_SEPARATOR);
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('CORE_PATH', APP_PATH . '/core');

try {

    /**
     * The FactoryDefault Dependency Injector automatically registers the services that
     * provide a full stack framework. These default services can be overidden with custom ones.
     */
    $di = new FactoryDefault();

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

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
