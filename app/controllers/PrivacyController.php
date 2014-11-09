<?php

namespace Phalconvn\Controllers;

class PrivacyController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->setTemplateBefore('public');
    }

}
