<?php

use Phalcon\Loader;
//use Phalcon\Cli\Console as ConsoleApp;
use Magecon\Core\Console as ConsoleApp;

$loader = new Loader();

$config = $di->get('config');
$classes = [];
foreach ($config->cli->modules as $module) {
    $classes[$module['class']] = APP_PATH . DS . $module['path'] . DS . 'Module.php';
}
$loader->registerClasses($classes);
$loader->register();

$modules = [];
foreach ($config->cli->modules as $module) {
    $modules[$module['name']] =[
        'className' => $module['class'],
        'path'      => APP_PATH . DS . $module['path'] . DS . 'Module.php'
    ];
}

/**
 * Create a console application
 */
$console = new ConsoleApp($di);

/**
 * Register console modules
 */
$console->registerModules($modules);
$console->setDefaultModule('cli');