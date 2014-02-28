<?php

namespace Phalconvn\Mail;

use Phalcon\Mvc\User\Component,
	Swift_Message as Message,
	Swift_SmtpTransport as Smtp,
	Phalconvn\Models\Users,
	Phalcon\Mvc\View;



/**
 * Phalconvn\Mail\Mail
 *
 * Sends e-mails based on pre-defined templates
 */
class Mail extends Component
{

	protected $_transport;

	protected $_amazonSes;

	protected $_directSmtp = false;

	public function test()
	{

	}
}