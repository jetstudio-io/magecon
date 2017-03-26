<?php

use Phalcon\Loader;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
//use Phalcon\Mvc\Model\MetaData\Redis as MetaDataAdapter;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Logger\Adapter\File as Logger;
use Phalcon\Mvc\Model\Manager as ModelsManager;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Annotations\Adapter\Redis as AnnotationRedis;
use Phalcon\Mvc\Model\MetaData\Strategy\Annotations as MetaDataStrategy;

use Magecon\Mvc\Model\Events\Manager\AnnotationsInitializer;


/**
 * Shared configuration service
 */
$di->setShared('config', function () {
    return include APP_PATH . "/config/config.php";
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () {
    $config = $this->getConfig();

    $class = 'Phalcon\Db\Adapter\Pdo\\' . $config->database->adapter;
    $params = [
        'host'     => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname'   => $config->database->dbname,
        'charset'  => $config->database->charset
    ];

    if ($config->database->adapter == 'Postgresql') {
        unset($params['charset']);
    }

    $connection = new $class($params);

    return $connection;
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->setShared('modelsMetadata', function () {
//    $metaData = new MetaDataAdapter([
//        "host"       => "127.0.0.1",
//        "port"       => 6379,
//        "persistent" => 0,
//        "statsKey"   => "_PHCM_MM",
//        "lifetime"   => null,
//        "index"      => 1,
//    ]);

    $metaData = new MetaDataAdapter();

    // Set a custom metadata database introspection
    $metaData->setStrategy(
        new MetaDataStrategy()
    );

    return $metaData;
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

/**
 * Looger component
 */
$di->setShared('logger', function() {
    $config = $this->getConfig();
    if (!file_exists($config->logger->path)) {
        mkdir($config->logger->path, 0777, true);
    }
    $logger = new Logger($config->logger->path . DS . $config->logger->debug);
    return $logger;
});

/**
 * Annotation service
 */

$di->setShared('annotations', function() {
    return new AnnotationRedis([
        'lifetime' => 8600,
        'prefix'   => 'annotations_',
    ]);
});

/**
 * Model manager service
 */

$di->setShared('modelsManager', function () {
    $eventsManager = new EventsManager();

    $modelsManager = new ModelsManager();

    $modelsManager->setEventsManager($eventsManager);

    // Attach a listener to models-manager
    $eventsManager->attach('modelsManager', new AnnotationsInitializer());

    return $modelsManager;
});