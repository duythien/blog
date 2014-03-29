<?php namespace Phalconvn\Controllers;

use Phalcon\Paginator\Adapter\Model as Paginator;
use Phalconvn\Models\Categories,
	Phalconvn\Models\Posts,
    Phalconvn\Models\PostsViews;

/**
 * Display in frontend
 */
class DocumentsController extends ControllerBase
{

    public function indexAction()
    {

    }

    /**
    * Download document
    */
    public function downloadAction(){
        
    }
    public function initialize()
    {
    	$this->view->setTemplateBefore('public');
    }
    
}

