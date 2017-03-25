<?php

use Phalcon\Cli\Dispatcher;

/**
* Set the default namespace for dispatcher
*/
$di->setShared('dispatcher', function() {
    $dispatcher = new Dispatcher();
    $dispatcher->setDefaultNamespace('Magecon\Cli\Tasks');
    return $dispatcher;
});

/**
 * Set the output service
 */

$di->setShared('output', new Magecon\Core\Output());