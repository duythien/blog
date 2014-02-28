<?php namespace Phalconvn\Controllers;

class AboutController extends ControllerBase
{

    public function indexAction()
    {
    	$this->view->setTemplateBefore('public');
    }

}

