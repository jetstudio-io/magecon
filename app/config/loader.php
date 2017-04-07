<?php

use Phalcon\Loader;

$loader = new Loader();

$namespaces = [];

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
$loader->register();


/**
 * Load module config
 */
$di->setShared('configLoader', new \Magecon\Core\ConfigLoader($di));