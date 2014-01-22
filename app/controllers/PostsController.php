<?php namespace Duythien\Controllers;
use Phalcon\Tag,
    Phalcon\Mvc\Model\Criteria,
    Phalcon\Paginator\Adapter\Model as Paginator;
use Duythien\Forms\LoginForm,
	Duythien\Forms\PostsForm,
    Duythien\Models\Posts;
use \Michelf\MarkdownExtra,
    \Michelf\Markdown;

require_once '../vendor/markdown/Markdown.inc.php';
/**
 * This is post page in backend.
 */
class PostsController extends ControllerBase
{
	public function initialize()
    {
	   $this->view->setTemplateBefore('private');
	}

    public function indexAction()
    {

        $this->persistent->conditions = null;
        $this->view->form = new PostsForm();
    }
    public function searchAction()
    {
        
        $request = $this->request;
        $searchParams = null;
        $numberPage = 1;
        if ($request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Duythien\Models\Posts', $this->request->getPost());
            $this->persistent->searchParams = $query->getParams();

        } 
        else {
            $numberPage = $this->request->getQuery("page", "int");
        }
        $parameters =array("order" =>"created DESC");
        if ($this->persistent->searchParams == true) {
            $parameters = $this->persistent->searchParams;
        } 
        $posts = Posts::find($parameters);
        if (count($posts) == 0) {
            $this->flash->notice("The search did not find any Posts");
            return $this->dispatcher->forward(array(
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $posts,
            "limit" => 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();

    }
    public function createAction()
    {
    	$userId =  $this->auth->getIdentity();
        $request = $this->request;
        $form = new PostsForm(null);

        if ($request->isPost()) {
            if ($form->isValid($request->getPost()) == true) {
                $post = new Posts();
                $title = $request->getPost('title');
                //translate markdown into html
                $content = Markdown::defaultTransform($request->getPost('content'));
                $post->assign(array(
                    'title'     => $title,
                    'categoriesId'=>$request->getPost('categoriesId'),
                    'tags'      =>$request->getPost('tags'),
                    'slug'      =>$this->tag->friendlyTitle($this->normalizeChars($title)),
                    'content'   =>$content,
                    'userPost'  =>$userId['username'],
                ));
                if ($post->save() ==true) {
                    $this->flash->success("Add Post success");
                    Tag::resetInput();
                    return $this->dispatcher->forward(array('action' => 'index'));
                } 
            $this->flash->error($post->getMessages());
 
            }

        }
        $this->view->form = $form;
    }
    public function editAction($id)
    {
        $post = Posts::findFirst($id);
        if ($post ==false) {
            $this->flash->error("Post was not found");
            return $this->dispatcher->forward(array('action' => 'index'));
        }
        $request = $this->request;
        $form = new PostsForm($post,array('edit'=>true));
        if ($request->isPost()) {
            if ($form->isValid($request->getPost()) ==true) {
                $userId =  $this->auth->getIdentity();
                $content = Markdown::defaultTransform($request->getPost('content'));
                $title = $request->getPost('title');
                $post->assign(array(
                    'id'        => $id,
                    'title'     => $title,
                    'categoriesId'=>$request->getPost('categoriesId'),
                    'tags'      =>$request->getPost('tags'),
                    'slug'      =>$this->tag->friendlyTitle($this->normalizeChars($title)),
                    'content'   => $content,
                    'userPost'  =>$userId['username'],
                    'numberViews' =>$post->numberViews
                ));
                if ($post->update()==true) {
                    $this->flash->success("Cập nhật thành công ");
                    Tag::resetInput();
                    return $this->dispatcher->forward(array('action' => 'index'));
                }
             $this->flash->error($post->getMessages());
            }
        }

        $this->view->form = $form;
    }
    public function deleteAction($id)
    {

        $post = Posts::findFirstById($id);
        if (!$post) {
            $this->flash->error("post was not found");
            return $this->dispatcher->forward(array('action' => 'index'));
        }

        if (!$post->delete()) {
            $this->flash->error($post->getMessages());
        } else {
            $this->flash->success("Post was deleted");
        }

        return $this->dispatcher->forward(array('action' => 'index'));
    }
    /**
     * Replace language-specific characters by ASCII-equivalents.
     * @param string $s
     * @return string
     */
    public static function normalizeChars($s)
    {
        $replace =  array(
            'ế' => 'e',
            'ề'  => 'e',
            'ể' => 'e',
            'ễ'  => 'e',
            'ệ' => 'e',
            #---------------------------------E^
            'Ế'  => 'e',
            'Ề' => 'e',
            'Ể'  => 'e',
            'Ễ' => 'e',
            'Ệ'  => 'e',
            #---------------------------------e
            'é'  => 'e',
            'è' => 'e',
            'ẻ'  => 'e',
            'ẽ' => 'e',
            'ẹ'  => 'e',
            'ê' => 'e',
            #---------------------------------E
            'É'  => 'e',
            'È' => 'e',
            'Ẻ'  => 'e',
            'Ẽ' => 'e',
            'Ẹ'  => 'e',
            'Ê' => 'e',
            #---------------------------------i
            'í'  => 'i',
            'ì' => 'i',
            'ỉ'  => 'i',
            'ĩ' => 'i',
            'ị'  => 'i',
            #---------------------------------I
            'Í'  => 'i',
            'Ì' => 'i',
            'Ỉ'  => 'i',
            'Ĩ' => 'i',
            'Ị'  => 'i',
            #---------------------------------o^
            'ố'  => 'o',
            'ồ' => 'o',
            'ổ'  => 'o',
            'ỗ' => 'o',
            'ộ'  => 'o',
            #---------------------------------O^
            'Ố'  => 'o',
            'Ồ' => 'o',
            'Ổ'  => 'o',
            'Ô' => 'o',
            'Ộ'  => 'o',
            #---------------------------------o*
            'ớ'  => 'o',
            'ờ' => 'o',
            'ở'  => 'o',
            'ỡ' => 'o',
            'ợ'  => 'o',
            #---------------------------------O*
            'Ớ'  => 'o',
            'Ờ' => 'o',
            'Ở'  => 'o',
            'Ỡ' => 'o',
            'Ợ'  => 'o',
            #---------------------------------u*
            'ứ'  => 'u',
            'ừ' => 'u',
            'ử'  => 'u',
            'ữ' => 'u',
            'ự'  => 'u',
            #---------------------------------U*
            'Ứ'  => 'u',
            'Ừ' => 'u',
            'Ử'  => 'u',
            'Ữ' => 'u',
            'Ự'  => 'u',
            #---------------------------------y
            'ý'  => 'y',
            'ỳ' => 'y',
            'ỷ'  => 'y',
            'ỹ' => 'y',
            'ỵ'  => 'y',
            #---------------------------------Y
            'Ý'  => 'y',
            'Ỳ' => 'y',
            'Ỷ'  => 'y',
            'Ỹ' => 'y',
            'Ỵ'  => 'y',
            #---------------------------------DD
            'Đ'  => 'd',
            'đ' => 'd',
            #---------------------------------o
            'ó'  => 'o',
            'ò' => 'o',
            'ỏ'  => 'o',
            'õ' => 'o',
            'ọ'  => 'o',
            'ô' => 'o',
            'ơ'  => 'o',
            #---------------------------------O
            'Ó'  => 'o',
            'Ò' => 'o',
            'Ỏ'  => 'o',
            'Õ' => 'o',
            'Ọ'  => 'o',
            'Ô' => 'o',
            'Ơ'  => 'o',
            #---------------------------------u
            'ú'  => 'u',
            'ù' => 'u',
            'ủ'  => 'u',
            'ũ' => 'u',
            'ụ'  => 'u',
            'ư' => 'u',
            #---------------------------------U
            'Ú'  => 'u',
            'Ù' => 'u',
            'Ủ'  => 'u',
            'Ũ' => 'u',
            'Ụ'  => 'u',
            'Ư' => 'u',
             
            #---------------------------------a^
            'ấ'  => 'a',
            'ầ' => 'a',
            'ẩ'  => 'a',
            'ẫ' => 'a',
            'ậ'  => 'a',
            #---------------------------------A^
            'Ấ'  => 'a',
            'Ầ' => 'a',
            'Ẩ'  => 'a',
            'Ẫ' => 'a',
            'Ậ'  => 'a',
            #---------------------------------a(
            'ắ'  => 'a',
            'ằ' => 'a',
            'ẳ'  => 'a',
            'ẵ' => 'a',
            'ặ'  => 'a',
            #---------------------------------A(
            'Ắ'  => 'a',
            'Ằ' => 'a',
            'Ẳ'  => 'a',
            'Ẵ' => 'a',
            'Ặ'  => 'a',
            #---------------------------------A
            'Á'  => 'a',
            'À' => 'a',
            'Ả'  => 'a',
            'Ã' => 'a',
            'Ạ'  => 'a',
            'Â' => 'a',
            'Ă'  => 'a',
            #---------------------------------a
            'ả'  => 'a',
            'ã' => 'a',
            'ạ'  => 'a',
            'â' => 'a',
            'ă'  => 'a',
            'à' => 'a',
            'á'  => 'a'
            );
        return strtr($s, $replace);
    }
    

}

