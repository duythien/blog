<?php namespace Phalconvn\Controllers;

use Phalcon\Tag,
	Phalcon\Mvc\Model\Criteria,
    Phalcon\Paginator\Adapter\Model as Paginator;

use Phalconvn\Forms\FileStoreForm,
	Phalconvn\Models\FileStore;
class FilestoreController extends  ControllerBase
{

    public function indexAction()
    {
    	$this->persistent->conditions = null;
        $this->view->form = new FileStoreForm();
    }

    public function createAction()
    {
    	$userId	 =  $this->auth->getIdentity();
        $request = $this->request;
    	$form 	 = new FileStoreForm(null);
    	if ($request->isPost()) {
    		if ($form->isValid($request->getPost()) == true && $request->hasFiles() == true) {

				$fileStore = new FileStore();

	            foreach ($request->getUploadedFiles() as $file) {
                    //var_dump($file);
					$fileStore->assign(array(
							'fileName' 		=> $file->getName(),
                            'fileCaption'   => $request->getPost('fileCaption'),
							'description'	=> $request->getPost('description'),
							'categoriesId'	=> $request->getPost('categoriesId'),
							'userId'		=> $userId['id'],
							'mimeType'		=> $file->getType(),
							'fileData'		=> file_get_contents($file->getTempName())
					));
					if ($fileStore->save() ==true) {
	                    $this->flash->success(_("Add Document success"));
	                    Tag::resetInput();
	                    return $this->dispatcher->forward(array('action' => 'index'));
               		 } 
            		$this->flash->error($fileStore->getMessages());
	            }
	            
    		}
    	}
    	$this->view->form = $form;
    }
    public function editAction($id)
    {
    	$fileStore = FileStore::findFirst($id);
        if ($fileStore ==false) {
            $this->flash->error(_("Document was not found"));
            return $this->dispatcher->forward(array('action' => 'index'));
        }
        $request = $this->request;
    	$userId	 =  $this->auth->getIdentity();
    	$form 	 = new FileStoreForm($fileStore,array('edit'=>true));
    	
    	if ($request->isPost()) {
    		if ($form->isValid($request->getPost()) == true && $request->hasFiles() == true) {

				$fileStore = new FileStore();

	            foreach ($request->getUploadedFiles() as $file) {
					$fileStore->assign(array(
							'fileName' 		=> $request->getPost('fileName'),
							'description'	=> $request->getPost('description'),
							'categoriesId'	=> $request->getPost('categoriesId'),
							'userId'		=> $userId['id'],
							'mimeType'		=> $file->getType(),
							'fileData'		=> file_get_contents($file->getTempName())
					));
					if ($fileStore->save() ==true) {
	                    $this->flash->success(_("Add Document success"));
	                    Tag::resetInput();
	                    return $this->dispatcher->forward(array('action' => 'index'));
               		 } 
            		$this->flash->error($fileStore->getMessages());
	            }
	            
    		}
    	}
    	$this->view->form = $form;
    }
    public function searchAction()
    {
    	$request = $this->request;
        $searchParams = null;
        $numberPage = 1;
        if ($request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Phalconvn\Models\FileStore', $this->request->getPost());
            $this->persistent->searchParams = $query->getParams();

        } 
        else {
            $numberPage = $this->request->getQuery("page", "int");
        }
        $parameters =array("order" =>"created DESC");
        if ($this->persistent->searchParams == true) {
            $parameters = $this->persistent->searchParams;
        } 
        $fileStore = FileStore::find($parameters);
        if (count($fileStore) == 0) {
            $this->flash->notice("The search did not find any FileStore");
            return $this->dispatcher->forward(array(
                "action" => "index"
            ));
        }
       // echo $fileStore->fileStore->id;
        $paginator = new Paginator(array(
            "data" => $fileStore,
            "limit" => 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }
    public function initialize()
    {
    	$this->view->setTemplateBefore('private');
    }

}

