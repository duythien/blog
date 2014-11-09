<?php namespace Phalconvn\Forms;

use Phalcon\Forms\Form,
    Phalcon\Forms\Element\Text,
    Phalcon\Forms\Element\TextArea,
    Phalcon\Forms\Element\Select,
    Phalcon\Forms\Element\Date,
    Phalcon\Forms\Element\Numeric,
    Phalcon\Forms\Element\Hidden,
    Phalcon\Forms\Element\Password,
    Phalcon\Forms\Element\Submit,
    Phalcon\Forms\Element\File,
    Phalcon\Forms\Element\Check,
    Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Email,
    Phalcon\Validation\Validator\Regex,
    Phalcon\Validation\Validator\Identical,
    Phalcon\Validation\Validator\StringLength,
    Phalcon\Validation\Validator\Confirmation;

use
    Phalconvn\Auth\Auth,
    Phalconvn\Auth\Exception as AuthException,
    Phalconvn\Models\Categories;


class FileStoreForm extends Form
{

    public function initialize($entity=null,$options=null)
    {

        //In edition the id is hidden

        if (isset($options['edit']) && $options['edit']) {
            $id = new Hidden('id');

        }else {
            $id = new Text('id');
        }

        $this->add($id);

        $fileCaption = new Text('fileCaption',array('placeholder' =>$this->request->getPost('fileCaption')));
        $fileCaption->setLabel(_('Caption'));
        $fileCaption->addValidators(array(
            new PresenceOf(array(
                'message' => _('Document caption not null')
            ))
        ));
        $this->add($fileCaption);

        $fileData = new File('fileData');
        $fileData->setLabel(('Document upload'));
        /*$fileData->addValidators(array(
			new PresenceOf(array(
				'message' =>_('Document file required')
				))
		));*/
        $this->add($fileData);

        //render if action is edit
        $fileDataEdit = new File('fileDataEdit');
        $fileDataEdit->setLabel(('Document upload'));
        /*$fileData->addValidators(array(
			new PresenceOf(array(
				'message' =>_('Document file required')
				))
		));*/
        $this->add($fileDataEdit);

        $categories = new Select('categoriesId',Categories::find(),array(
            'using'=>array('id','name'),
            'useEmpty' => true,
                'emptyText' => '----',
                'emptyValue' => ''

        ));
        $categories->setLabel('Categories');
        $this->add($categories);


        $description = new TextArea('description', array(
                    'placeholder' =>' Enter text ...',
                    //'style' =>'width: 810px; height: 200px'
                    'class'=> 'span8',
                    'rows'=> '6',
        ));
        $description->addValidator(
            new PresenceOf(array(
            'message' =>_('The description is required')
            ))
        );
        $description->setLabel('Description');
        $this->add($description);

        $this->add(new Text('q',array('placeholder'=>$this->request->getPost('q','striptags'))));





    }

    /**
	 * Prints messages for a specific element
	 */
    public function messages($name)
    {
        if ($this->hasMessagesFor($name)) {
            foreach ($this->getMessagesFor($name) as $message) {
                $this->flash->error($message);
            }
        }
    }

}
