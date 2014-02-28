<?php namespace Phalconvn\Models;

use \Phalcon\Mvc\Model;
class Categories extends Model
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
    public $name;
     
    /**
     *
     * @var string
     */
    public $slug;
     
    /**
     *
     * @var integer
     */
    public $numberPosts;
     
    /**
     * Independent Column Mapping.
     */
    public function initialize()
    {
        /*$this->hasMany('id','Phalconvn\Models\Posts','categoriesId',array(
        'alias' => 'Posts',
        'foreignKey' => array(
                'message' => 'Profile cannot be deleted because it\'s used on Posts'
            )
        ));*/
    }
    public function columnMap() {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'slug' => 'slug', 
            'numberPosts' => 'numberPosts'
        );
    }

}
