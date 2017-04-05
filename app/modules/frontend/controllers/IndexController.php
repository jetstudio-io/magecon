<?php

namespace Magecon\Modules\Frontend\Controllers;

use Magecon\Frontend\Controllers\ControllerBase as FrontendController;
use Magecon\Cms\Model\Block;

class IndexController extends FrontendController
{

    public function indexAction()
    {
        $session = $this->getDI()->get('session');
        $session->set('test', 'hello world in frontend updated');
        $block = new Block();
    }
}

