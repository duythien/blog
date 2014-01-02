<?php namespace Duythien\Forms;

use Phalcon\Forms\Form,
	Phalcon\Forms\Element\Text,
	Phalcon\Forms\Element\Select,
	Phalcon\Forms\Element\Date,
	Phalcon\Forms\Element\Numeric,
	Phalcon\Forms\Element\Hidden,
	Phalcon\Forms\Element\Password,
	Phalcon\Forms\Element\Submit,
	Phalcon\Forms\Element\File,
	Phalcon\Forms\Element\Check,
	Phalcon\Validation\Validator\PresenceOf,
	Phalcon\Validation\Validator\email,
	Phalcon\Validation\Validator\Regex,
	Phalcon\Validation\Validator\Identical,
	Phalcon\Validation\Validator\StringLength,
	Phalcon\Validation\Validator\Confirmation;

class SignUpForm extends Form
{

	public function initialize($entity=null, $options=null)
	{

	if (isset($options['edit']) && $options['edit']) {
			$id = new Hidden('id');

			
	       
		} else {
			$id = new Text('id');
			
		}

				
		$username = new Text('username',array('placeholder' =>'Tran Duy Thien'));//<input type="text" value="" id="fullName" name="fullName">
		$username->setLabel('Tên Tài Khoản');//<label for="fullName">fullName</label>

		$username->addValidators(array(
			new PresenceOf(array(
				'message' => 'Tài khoản không được rỗng'
			))
		));
		$this->add($username);
				





		//Password
		$password = new Password('password');

		$password->setLabel('Mật Khẩu');

		$password->addValidators(array(
			new PresenceOf(array(
				'message' => 'Mật khẩu không được rỗng'
			)),
			new StringLength(array(
				'min' => 8,
				'messageMinimum' => 'Mật khẩu phải lớn hơn 8 ký tự'
			)),
			new Confirmation(array(
				'message' => 'Mật khẩu không khớp',
				'with' => 'confirmPassword'
			))
		));

		$this->add($password);

		//Confirm Password
		$confirmPassword = new Password('confirmPassword');

		$confirmPassword->setLabel('Nhập lại mật khẩu');

		$confirmPassword->addValidators(array(
			new PresenceOf(array(
				'message' => 'The confirmation password is required'
			))
		));

		$this->add($confirmPassword);

		//Remember
		$terms = new Check('terms', array(
			'value' => 'yes'
		));

		$terms->setLabel('Đồng ý với Điều khoản dịch vụ và chính sách bảo mật của chúng tôi');

		$terms->addValidator(
			new Identical(array(
				'value' => 'yes',
				'message' => 'Bạn chưa chọn'
			))
		);

		$this->add($terms);

		//CSRF
		$csrf = new Hidden('csrf');

		$csrf->addValidator(
			new Identical(array(
				'value' => $this->security->getSessionToken(),
				'message' => 'CSRF validation failed'
			))
		);

		$this->add($csrf);

		//Sign Up
		$this->add(new Submit('Sign Up', array(
			'class' => 'btn btn-primary pull-right'
		)));

	}

	/**
	 * Prints messages for a specific element
	 */
	public function messages($username)
	{
		if ($this->hasMessagesFor($username)) {
			foreach ($this->getMessagesFor($username) as $message) {
				$this->flash->error($message);
			}
		}
	}

}