<?php
/**
 * @CopyrightMIT
 */
/**
 * @author Nguyen Van Thiep
 * Date: 07/04/2017
 * Time: 01:37
 */

namespace Magecon\Core\Configuration;

use Phalcon\Di\FactoryDefault;

interface LoaderInterface {
    public function processConfig(FactoryDefault $di);
}