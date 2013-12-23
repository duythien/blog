<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(array(
	'Nginx\Models' => $config->application->modelsDir,
	'Nginx\Controllers' => $config->application->controllersDir,
	'Nginx\Forms' => $config->application->formsDir,
	'Nginx' => $config->application->libraryDir
));

$loader->register();
