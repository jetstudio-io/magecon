<?php

use Phalcon\Loader;
use Phalcon\Cli\Console as ConsoleApp;

$loader = new Loader();

$config = $di->get('config');
$classes = [];
foreach ($config->cli->module as $module) {
    $classes[$module['class']] = APP_PATH . DS . $module['path'];
}
$loader->registerClasses($classes);

$loader->register();

$modules = [];
foreach ($config->cli->module as $module) {
    $modules[$module['name']] =[
        'className' => $module['class']
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