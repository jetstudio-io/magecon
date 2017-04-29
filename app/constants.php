<?php
/**
 * Copyright (c) 2017 magecon
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

/**
 * @author Nguyen Van Thiep
 * Date: 09/04/2017
 * Time: 18:35
 */

define("DS", DIRECTORY_SEPARATOR);
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('CORE_PATH', APP_PATH . '/core');
define('VENDOR_PATH', BASE_PATH . DS . 'vendor');
define('VIEW_PATH', APP_PATH . DS . 'views' . DS);

final class SERVICES {
    const EVENTS_MANAGER = 'eventsManager';
    const VOLT_SHAREED = 'voltShared';
    const VIEW = 'view';
    const SESSION = 'session';
    const MODELS_META_DATA = "modelsMetadata";
    const CONFIG = 'config';
    const DB = 'db';
    const FLASH = 'flash';
    const DISPATCHER = 'dispatcher';
    const ROUTER = 'router';
    const URL = 'url';
    const REDIS = 'redis';
    const MODULE_CONFIG_LOADER = 'moduleConfigLoader';
    const ANNOTATIONS = 'annotations';
    const LOGGER = 'logger';
}

final class ROUTER {
    const ADMIN_DASHBOARD = 'admin_dashboard';
    const ADMIN_NOTFOUND = 'admin_notfound';
}