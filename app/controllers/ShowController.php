<?php

namespace Phalconvn\Controllers;

use Phalconvn\Models\Posts;

class ShowController extends ControllerBase
{
    public function indexAction()
    {
        echo(1);
    }

    public function showAction()
    {
        $id  = $this->dispatcher->getParam('id');

        $post= Posts::findFirstByid($id);
        if (!$post) {
            return $this->response->redirect("index");
        }
        $this->view->post = $post;

    }
    public function initialize()
    {
        $this->view->setTemplateBefore('public');
    }
}
