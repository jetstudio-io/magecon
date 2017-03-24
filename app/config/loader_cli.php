<?php

use Phalcon\Loader;

$loader = new Loader();

$namespaces = [];

/**
 * Register core module
 */
$namespaces['Magecon'] = CORE_PATH . DS . 'Magecon';

/**
 * Register namespace for all library in
 * app/common/library
 */
$libraryPath = APP_PATH . '/common/library';
$libraryDir = opendir($libraryPath);
while ($dir = readdir($libraryDir)) {
    if (strpos($dir, ".") === false && is_dir($libraryPath . DS . $dir)) {
        $namespace = ucfirst(strtolower($dir));
        $namespaces[$namespace] = $libraryPath . DS . $dir;
    }
}

$loader->registerNamespaces($namespaces);

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
