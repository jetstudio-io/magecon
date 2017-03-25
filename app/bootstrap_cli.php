<?php

use Phalcon\Di\FactoryDefault\Cli as FactoryDefault;

define("DS", DIRECTORY_SEPARATOR);
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('CORE_PATH', APP_PATH . '/core');

/**
 * The FactoryDefault Dependency Injector automatically registers the services that
 * provide a full stack framework. These default services can be overidden with custom ones.
 */
$di = new FactoryDefault();

/**
 * Include general services
 */
include APP_PATH . '/config/services.php';

/**
 * Include Autoloader global
 */
include APP_PATH . '/config/loader.php';
/**
 * Include Autoloader
 */
include APP_PATH . '/config/loader_cli.php';

/**
 * Include cli environment specific services
 */
include APP_PATH . '/config/services_cli.php';

/**
 * Get config service for use in inline setup below
 */
$config = $di->getConfig();

/**
 * Setup the arguments to use the 'cli' module
 */
$arguments = ['module' => 'cli'];

/** @var Magecon\Core\Output $output */
$output = $di->get('output');

/**
 * Process the console arguments
 */
foreach ($argv as $k => $arg) {
    if ($k == 1) {
        $params = explode(":", $arg);
        if (count($params) < 2) {
            $output->println("Magecon command must be <color red>module:task</color> or <color red>module:task:action</color>");
            exit(255);
        }
        $arguments['module'] = $params[0];
        $arguments['task'] = $params[1];
        if (isset($params[2])) {
            $arguments['action'] = $params[2];
        }
    } elseif ($k == 2) {
        $arguments['action'] = $arg;
    } elseif ($k >= 3) {
        $arguments['params'][] = $arg;
    }
}

try {

    /**
     * Handle
     */
    $console->handle($arguments);

    if (isset($config["printNewLine"]) && $config["printNewLine"]) {
        echo PHP_EOL;
    }

} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
    exit(255);
}
