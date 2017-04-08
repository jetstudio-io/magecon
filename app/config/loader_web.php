<?php
use Magecon\Mvc\Application;

/**
 * Handle the request
 */
$application = new Application($di);
$application->useImplicitView(false);
Magecon\Core\ModuleRegister::register($application, 'frontend');