<?php

/*
 +--------------------------------------------------------------------------+
 | Blog Create by  Phalcon VietNam                                     		|
 +--------------------------------------------------------------------------+
 | Copyright (c) 2013-2014 Phalcon VietNam Team and contributors            |
 +--------------------------------------------------------------------------+
 | This source file is subject the Apache license, that is bundled with     |
 | this package in the file LICENSE, and is available through the           |
 | world-wide-web at the following url:                                     |
 | https://www.apache.org/licenses/LICENSE-2.0.html                         |
 |                                                                          |        
 +--------------------------------------------------------------------------+
*/

error_reporting(E_ALL);

define('ZEPHIRPATH', __DIR__ . '/');
define('T', "\t");
define('2T', "\t\t");

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} else {
    require __DIR__ . '/Library/Loader.php';
    Zephir\Loader::register();
}