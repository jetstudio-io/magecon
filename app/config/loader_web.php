<?php
use Magecon\Mvc\Application;

/**
 * Handle the request
 */
$application = new Application($di);
Magecon\Core\ModuleRegister::register($application, 'frontend');