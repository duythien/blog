<?php

$router = new Phalcon\Mvc\Router();
$router->removeExtraSlashes(true);

$router->add('/login',array(
				'controller'=>'session',
				'action'	=>'login',
			));
$router->add('/view/{id:[0-9]+}/{slug}', array(
	'controller' => 'index',
	'action' => 'show'
));
$router->add("/set-language/{language:[a-zA-Z\_]+}", array(
    'controller' => 'index',
    'action' => 'setLanguage'
));

return $router;