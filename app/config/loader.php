<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(array(
	'Phalconvn\Models' => $config->application->modelsDir,
	'Phalconvn\Controllers' => $config->application->controllersDir,
	'Phalconvn\Forms' => $config->application->formsDir,
	'Phalconvn' => $config->application->libraryDir
));

$loader->register();
