<?php
use Magecon\Mvc\Application;
use Magecon\Mvc\Application\Event\Manager\ModuleAutoLoader;

use Phalcon\Events\Manager as EventManager;

$applicationEventManager = new EventManager();
$applicationEventManager->attach('application', new ModuleAutoLoader());

/**
 * Handle the request
 */
$application = new Application($di);
$application->useImplicitView(false);
$application->setEventsManager($applicationEventManager);