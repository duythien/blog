<?php namespace Phalconvn\Models;

use Phalcon\Mvc\Model;


class FileStore extends Model
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
    public $fileName;

    /**
     *
     * @var string
     */
    public $fileCaption;
     
    /**
     *
     * @var string
     */
    public $mimeType;
     
    /**
     *
     * @var string
     */
    public $description;
     
    /**
     *
     * @var string
     */
    public $fileData;
     
    /**
     *
     * @var integer
     */
    public $categoriesId;
    /**
     *
     * @var integer
     */
    public $userId;
    /**
     *
     * @var integer
     */
    public $created;
     
    public function beforeValidationOnCreate()
    {
        $this->created = time();

    }
    /**
     * Sets the timestamp before update the confirmation
     */
    public function beforeValidationOnUpdate()
    {
        $this->created = time();
    }

    public function initialize()
    {
        $this->belongsTo('userId','Phalconvn\Models\Users','id',array(
            'alias' => 'userUpload'
        ));
        $this->belongsTo('categoriesId', 'Phalconvn\Models\Categories', 'id', array(
            'alias' => 'categoryUpload',
            'reusable' => true,
            'foreignKey' => array(
                'message' => 'The category is not valid'
            )
        ));
    }

}
