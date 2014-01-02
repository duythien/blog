<?php namespace Duythien\Models;

use Phalcon\Mvc\Model;
class Posts extends Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $title;
     
    /**
     *
     * @var string
     */
    public $content;
     
    /**
     *
     * @var string
     */
    public $categoriesId;
     
    /**
     *
     * @var string
     */
    public $slug;
     
    /**
     *
     * @var string
     */
    public $tags;
     
    /**
     *
     * @var string
     */
    public $created;
     
    /**
     *
     * @var integer
     */
    public $numberViews;
     
    /**
     *
     * @var string
     */
    public $userPost;
     
    

    public function beforeValidationOnCreate()
    {
        $this->numberViews = '0';
        $this->created = time();

    }
    /**
     * Sets the timestamp before update the confirmation
     */
    public function beforeValidationOnUpdate()
    {
        $this->created = time();
    }

    /**
     * Create a posts-views logging the ipaddress where the post was created
     * This avoids that the same session counts as post view
     */
    public function beforeCreate()
    {
        $postView = new PostsViews();
        $postView->ipaddress = $this->getDI()->getRequest()->getClientAddress();
        $this->views = $postView;
        $this->created = time();
    }
    public function afterCreate()
    {
        /**
         * Register a new activity
         */
        if ($this->id > 0) {

           
            /**
             * Update the total of posts related to a category
             */
            $this->category->numberPosts++;
            $this->category->save();
        }
    }

   /**
     * Validate that emails are unique across users
     */
    public function validation()
    {
        if ($this->validationHasFailed() == true) {
            return false;
        }
        return $this->validationHasFailed() != true;
    }
    public function initialize()
    {
        $this->belongsTo('categoriesId','Duythien\Models\Categories','id',array(
        'alias' => 'Categories',
        'reusable' => true
        ));
        $this->hasMany('id', 'Duythien\Models\PostsViews', 'postsId', array(
            'alias' => 'views'
        ));
        $this->belongsTo('categoriesId', 'Duythien\Models\Categories', 'id', array(
            'alias' => 'category',
            'reusable' => true,
            'foreignKey' => array(
                'message' => 'The category is not valid'
            )
        ));
    }
   

}
