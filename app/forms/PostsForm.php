<?php
namespace Nginx\Forms;

use Phalcon\Forms\Form,
	Phalcon\Forms\Element\Text,
	Phalcon\Forms\Element\TextArea,
	Phalcon\Forms\Element\Hidden,
	Phalcon\Forms\Element\Password,
	Phalcon\Forms\Element\Submit,
	Phalcon\Forms\Element\Check,
	Phalcon\Forms\Element\Select,
	Phalcon\Validation\Validator\PresenceOf,
	Phalcon\Validation\Validator\Email,
	Phalcon\Validation\Validator\Identical,
	Phalcon\Validation\Validator\StringLength,
	Phalcon\Validation\Validator\Confirmation;
use Nginx\Models\Categories;
class PostsForm extends Form
{
	public function initialize($entity=null, $options=null)
	{
		//In edition the id is hidden
		if (isset($options['edit']) && $options['edit']) {
			$id = new Hidden('id');
		}
		else {
			$id = new Text('id');
		}

		$this->add($id);

		//$title = new Text('title');//<input type="text" value="" id="username" name="username">
		$title = new Text('title',array(
			'placeholder' =>'Enter title',
			'class' => 'span10'
		));
		$title->setLabel('Title');//<label for="username">Username</label>

		$title->addValidators(array(
			new PresenceOf(array(
				'message' => 'The title is required'
				
			))
		));
		
		$this->add($title);
		$this->add(new Text('tags',array('placeholder'=>'tags')));
		$content = new TextArea('content', array(
  					'placeholder' =>' Enter text ...',
  					//'style' =>'width: 810px; height: 200px'
  					'class'=> 'span10',
  					'rows'=> '10',
  					'cols' => '80'
		));
		$content->addValidator(
 		 	new PresenceOf(array(
    		'message' =>'The content is required'
  			))
		);
		$this->add($content);

		$categories = new Select('categoriesId',Categories::find(),array(
			'using'=>array('id','name'),
			'useEmpty' => true,
				'emptyText' => '----',
				'emptyValue' => ''

		));
		$this->add($categories);
		
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