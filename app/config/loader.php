<?php

use Phalcon\Loader;

$loader = new Loader();

$namespaces = [];

/**
 * Register core namespace
 */
$namespaces['Magecon'] = CORE_PATH . DS . 'Magecon';

/**
 * Register namespace for all library in
 * app/common/library
 */
//$libraryPath = APP_PATH . '/common/library';
//$libraryDir = opendir($libraryPath);
//while ($dir = readdir($libraryDir)) {
//    if (strpos($dir, ".") === false && is_dir($libraryPath . DS . $dir)) {
//        $namespace = ucfirst(strtolower($dir));
//        $namespaces[$namespace] = $libraryPath . DS . $dir;
//    }
//}

$loader->registerNamespaces($namespaces);
$loader->register();


/**
 * Load module config
 */
\Magecon\Core\ConfigLoader::autoload($di);

$config = $di->get('config');
print_r($config);
die;

/**
 * Register core module classes
 * app/core/Magecon
*/
$classes = [];
foreach ($application->getModules() as $key => $module) {
    $classes[$module['className']] = $module['path'];
}
$loader->registerClasses($classes);

$loader->register();
