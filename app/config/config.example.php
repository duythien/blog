<?php

return new \Phalcon\Config(array(

    'site' => array(
        'name'      => 'Phalcon Framework',
        'url'       => 'http://forum.phalconphp.com',
        'project'   => 'Phalcon',
        'software'  => 'Phosphorum',
        'repo'      => 'https://github.com/phalcon/cphalcon/issues',
        'docs'      => 'https://github.com/phalcon/docs',
    ),

    'database'    => array(
        'adapter'  => 'Mysql',
        'host'     => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'blog',
        'charset'  => 'utf8'
    ),

    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
        'formsDir'       => APP_PATH . '/app/form/',
        'cacheDir'       => APP_PATH . '/app/cache/volt/',
        'development'    => array(
            'staticBaseUri' => '/',
            'baseUri'       => '/'
        ),
        'production'     => array(
            'staticBaseUri' => 'http://static.phosphorum.com/',
            'baseUri'       => '/'
        ),
        'debug'          => true
    ),

    'mandrillapp' => array(
        'secret' => ''
    ),

    'github'      => array(
        'clientId'     => '',
        'clientSecret' => '',
        'redirectUri'  => 'http://pforum.loc/login/oauth/access_token/'
    ),

    'amazonSns'   => array(
        'secret' => ''
    ),

    'smtp'        => array(
        'host'     => "",
        'port'     => 25,
        'security' => "tls",
        'username' => "",
        'password' => ""
    ),

    'beanstalk'   => array(
        'disabled' => true,
        'host'     => '127.0.0.1'
    ),

    'elasticsearch' => array(
        'index'    => 'phosphorum'
    ),
    
    'mail'     => array(
        'fromName'     => 'Phalcon',
        'fromEmail'    => 'phosphorum@phalconphp.com',
    )
));
