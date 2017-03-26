<?php

use Phalcon\Loader;
use Phalcon\Mvc\Application;

$loader = new Loader();

$config = $di->get('config');

$modules = [];
foreach ($config->web->modules as $module) {
    $modules[$module['name']] =[
        'className' => $module['class'],
        'path'      => APP_PATH . DS . $module['path']
    ];
}

/**
 * Handle the request
 */
$application = new Application($di);

/**
 * Register application modules
 */
$application->registerModules($modules);

/**
 * Register module classes
 *
$loader->registerClasses([
    'Magecon\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Magecon\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);
*/
$classes = [];
foreach ($application->getModules() as $key => $module) {
    $classes[$module['className']] = $module['path'];
}
$loader->registerClasses($classes);

$loader->register();
