<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(array(
	'Duythien\Models' => $config->application->modelsDir,
	'Duythien\Controllers' => $config->application->controllersDir,
	'Duythien\Forms' => $config->application->formsDir,
	'Duythien' => $config->application->libraryDir
));

$loader->register();
