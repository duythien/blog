<?php namespace Nginx\Models;


use Phalcon\Mvc\Model;
class PostsViews extends Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var integer
     */
    public $postsId;
     
    /**
     *
     * @var string
     */
    public $ipaddress;
     
     public function initialize()
    {
        $this->belongsTo('postsId', 'Nginx\Models\Posts', 'id', array(
            'alias' => 'post'
        ));
    }
    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id', 
            'postsId' => 'postsId', 
            'ipaddress' => 'ipaddress'
        );
    }

}
