<?php

namespace Magecon\Modules\Frontend\Controllers;

use Magecon\Cms\Model\Block;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $session = $this->getDI()->get('session');
        $session->set('test', 'hello world in frontend updated');
        $block = new Block();
    }

    public function testAction() {
        $session = $this->getDI()->get('session');
        $this->view->setVar('session_test', $session->get('test'));
    }
}

