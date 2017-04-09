<?php
use Magecon\Mvc\Application;
use Magecon\Mvc\Application\Event\Manager\ModuleAutoLoader;


$applicationEventManager = $di->get(SERVICES::EVENTS_MANAGER);
$applicationEventManager->attach('application', new ModuleAutoLoader());

/**
 * Handle the request
 */
$application = new Application($di);
$application->useImplicitView(false);
$application->setEventsManager($applicationEventManager);