<?php

namespace Duythien\Mail;

use Phalcon\Mvc\User\Component,
	Swift_Message as Message,
	Swift_SmtpTransport as Smtp,
	Duythien\Models\Users,
	Phalcon\Mvc\View;



/**
 * Duythien\Mail\Mail
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