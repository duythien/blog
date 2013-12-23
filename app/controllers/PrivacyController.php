<?php

namespace Nginx\Controllers;

class PrivacyController extends ControllerBase
{

    public function indexAction()
    {
    	$this->view->setTemplateBefore('public');
    }

}

