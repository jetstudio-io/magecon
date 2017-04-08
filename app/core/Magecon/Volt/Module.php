<?php
/**
 * @CopyrightMIT
 */
/**
 * @author Nguyen Van Thiep
 * Date: 07/04/2017
 * Time: 00:54
 */

namespace Magecon\Volt;

use Phalcon\DiInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View\Engine\Volt;

class Module implements ModuleDefinitionInterface {

    public function registerAutoloaders(DiInterface $di = null) {
    }

    public function registerServices(DiInterface $di) {
        /* @var $voltEngine Volt*/
        $voltEngine = $di->get('voltShared');
        $complier = $voltEngine->getCompiler();
        $complier
            ->addFunction('toHtml', function ($resolvedArgs, $exprArgs) use ($complier) {
            return '$this->toHtml()';
        })
            ->addFilter('getChildHtml', function ($resolvedArgs, $exprArgs) use ($complier) {
            return '$this->getChildHtml(\'' . $resolvedArgs . '\')';
        });
    }

}