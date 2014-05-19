<?php namespace Phalconvn\Controllers;

use Phalcon\Tag,
    Phalcon\Mvc\Model\Criteria,
    Phalcon\Paginator\Adapter\Model as Paginator;
use Phalconvn\Forms\CategoriesForm,
    Phalconvn\Models\Categories;
    
/**
 * This is categories in backend,edit, add,delete....
 */
class CategoriesController extends ControllerBase
{


    public function initialize()
    {
    	$this->view->setTemplateBefore('private');
    }
    public function indexAction()
    {
        $this->persistent->conditions = null;
        $this->view->form = new CategoriesForm();
    }
    public function searchAction()
    {
        $request = $this->request;
        $searchParams = null;
        $numberPage = 1;
        if ($request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Phalconvn\Models\Categories', $this->request->getPost());
            $this->persistent->searchParams = $query->getParams();

        } 
        else {
            $numberPage = $this->request->getQuery("page", "int");
        }
        $parameters = array('order'=>'id DESC');
        if ($this->persistent->searchParams == true) {
            $parameters = $this->persistent->searchParams;
        } 
        $Categories = Categories::find($parameters);
        if (count($Categories) == 0) {
            $this->flash->notice(_("The search did not find any Categories"));
            return $this->dispatcher->forward(array(
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $Categories,
            "limit" => 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();

    }
    public function createAction()
    {
        $request = $this->request;
        $form = new CategoriesForm(null);

        if ($request->isPost()) {
            if ($form->isValid($request->getPost()) == true) {
                $categories = new Categories();
                $categories->assign(array(
                    'name'     => $request->getPost('name'),
                    'slug'      =>$request->getPost('slug'),
                ));
                if ($categories->save() ==true) {
                    $this->flash->success(_("Add categories success"));
                    Tag::resetInput();
                    return $this->dispatcher->forward(array('action' => 'index'));
                } 
            $this->flash->error($categories->getMessages());
 
            }

        }
        $this->view->form = $form;
    }

    public function editAction($id)
    {
        $categories = Categories::findFirst($id);
        if ($categories ==false) {
            $this->flash->error("categories was not found");
            return $this->dispatcher->forward(array('action' => 'index'));
        }
        $request = $this->request;
        $form = new CategoriesForm($categories,array('edit'=>true));
        if ($request->isPost()) {
            if ($form->isValid($request->getPost()) ==true) {
            $categories->assign(array(
                'id'        => $id,
                'name'     => $request->getPost('name'),
                'slug'      =>$request->getPost('slug'),
               
            ));
            if ($categories->update()==true) {
                $this->flash->success(_("Update sucess post"));
                Tag::resetInput();
                return $this->dispatcher->forward(array('action' => 'index'));
            }
         $this->flash->error($categories->getMessages());
        }
        }

        $this->view->form = $form;
    }
    public function deleteAction($id)
    {

        $categories = Categories::findFirstById($id);
        if (!$categories) {
            $this->flash->error(_("Ucategories was not found"));
            return $this->dispatcher->forward(array('action' => 'index'));
        }

        if (!$categories->delete()) {
            $this->flash->error($categories->getMessages());
        } else {
            $this->flash->success(_("Categories was deleted"));
        }

        return $this->dispatcher->forward(array('action' => 'index'));
    }

}

