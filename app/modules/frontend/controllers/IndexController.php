<?php

namespace Magecon\Modules\Frontend\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $session = $this->getDI()->get('session');
        $session->set('test', 'hello world in frontend updated');
    }

    public function testAction() {
        $session = $this->getDI()->get('session');
        $this->view->setVar('session_test', $session->get('test'));
    }
}

