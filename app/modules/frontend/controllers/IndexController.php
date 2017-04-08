<?php

namespace Magecon\Modules\Frontend\Controllers;

use Magecon\Frontend\Controllers\ControllerBase as FrontendController;

class IndexController extends FrontendController
{

    public function indexAction()
    {
        $session = $this->getDI()->get('session');
        $session->set('test', 'hello world in frontend updated');
    }
}

