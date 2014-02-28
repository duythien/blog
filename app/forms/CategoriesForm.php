<?php namespace Phalconvn\Forms;

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
use Phalconvn\Models\Categories;
class CategoriesForm extends Form
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
		$name = new Text('name',array(
			'placeholder' =>'Enter name',
		));
		$name->setLabel('name');//<label for="username">Username</label>

		$name->addValidators(array(
			new PresenceOf(array(
				'message' => 'The name is required'
				
			))
		));
		
		$this->add($name);
		$slug = new Text('slug',array(
			'placeholder' =>'Enter slug',
		));
		$slug->setLabel('Slug');//<label for="username">Username</label>

		$slug->addValidators(array(
			new PresenceOf(array(
				'message' => 'The Slug is required'
				
			))
		));
		
		$this->add($slug);
		
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