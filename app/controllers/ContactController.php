<?php

namespace Phalconvn\Controllers;

class ContactController extends ControllerBase
{

    public function initialize()
    {
        $this->view->setTemplateBefore('public');
    }
}
