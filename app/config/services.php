<?php

use Phalcon\DI\FactoryDefault,
    Phalcon\Mvc\View,
    Phalcon\Crypt,
    Phalcon\Mvc\Dispatcher,
    Phalcon\Mvc\Url as UrlResolver,
    Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter,
    Phalcon\Mvc\View\Engine\Volt as VoltEngine,
    Phalcon\Mvc\Model\Metadata\Files as MetaDataAdapter,
    Phalcon\Session\Adapter\Files as SessionAdapter,
    Phalcon\Flash\Direct as Flash,
    Phalcon\Events\Manager as EventsManager;

use Phalconvn\Auth\Auth,
    Phalconvn\Acl\Acl,
    Phalconvn\Mail\Mail,
    Phalconvn\Elements;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
 * Register the global configuration as config
 * print_r($this->config->application['publicUrl']);
 */
$di->set('config', $config);

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->set('url', function () use ($config) {
    $url = new UrlResolver();
    
    if (!$config->application->debug) {
        $url->setBaseUri($config->application->production->baseUri);
        $url->setStaticBaseUri($config->application->production->staticBaseUri);
    } else {
        $url->setBaseUri($config->application->development->baseUri);
        $url->setStaticBaseUri($config->application->development->staticBaseUri);
    }
    return $url;
}, true);

/**
 * Setting up the view component
 */
$di->set('view', function () use ($config) {

    $view = new View();

    $view->setViewsDir($config->application->viewsDir);

    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($config) {

            $volt = new VoltEngine($view, $di);
            $voltOptions = array(
                'compiledPath' => $config->application->cacheDir,
                'compiledSeparator' => '_'
            );
            //debug
            if ($config->application->debug) {
                    $voltOptions['compileAlways'] = true;
            }
            $volt->setOptions($voltOptions);

            //load function php
            $compiler = $volt->getCompiler();
            //define variable translate
            $compiler->addFunction('t', '_');

            return $volt;
        }
    ));

    return $view;
}, true);

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->set('db', function () use ($config) {
    $eventsManager = new EventsManager();

    $logger = new Phalcon\Logger\Adapter\File(APP_PATH ."/app/log/debug.log");
    //Listen all the database events
    $eventsManager->attach('db', function ($event, $connection) use ($logger) {
        if ($event->getType() == 'beforeQuery') {
            $logger->log($connection->getSQLStatement(), Phalcon\Logger::ERROR);
        }
    });
    $connection = new DbAdapter(array(
        'host' => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname' => $config->database->dbname,
        'charset'=> 'utf8'
    ));
    //Assign the eventsManager to the db adapter instance
    $connection->setEventsManager($eventsManager);

    return $connection;
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
/*$di->set('modelsMetadata', function () use ($config) {
	return new MetaDataAdapter(array(
		'metaDataDir' => $config->application->cacheDir . 'metaData/'
	));
});*/

/**
 * Start the session the first time some component request the session service
 */
$di->set('session', function () {
    $session = new SessionAdapter();
    $session->start();
    return $session;
});

/**
 * Crypt service
 */
$di->set('crypt', function () use ($config) {
    $crypt = new Crypt();
    $crypt->setKey($config->application->cryptSalt);
    return $crypt;
});

/**
 * Dispatcher use a default namespace
 */
$di->set('dispatcher', function () {
    $dispatcher = new Dispatcher();
    $dispatcher->setDefaultNamespace('Phalconvn\Controllers');
    return $dispatcher;
});

/**
 * Loading routes from the routes.php file
 */
$di->set('router', function () {
    return require __DIR__ . '/routes.php';
});

/**
 * Flash service with custom CSS classes
 */
$di->set('flash', function () {
    return new Flash(array(
        'error' => 'alert alert-error',
        'success' => 'alert alert-success',
        'notice' => 'alert alert-info',
    ));
});

/**
 * Custom authentication component
 */
$di->set('auth', function () {
    return new Auth();
});

/**
 * Mail service uses AmazonSES
 */
$di->set('mail', function () {
    return new Mail();
});

/**
 * Access Control List
 */
$di->set('acl', function () {
    return new Acl();
});
/**
*Render elements menu html
*/
$di->set('elements',function () {
    return new Elements();
});

