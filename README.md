[ ![Codeship Status for duythien/blog](https://www.codeship.io/projects/ced77a40-3d52-0132-1c5e-66923e175028/status)](https://www.codeship.io/projects/43243)

Blog project Multi-lingual Support
==================================

Phalcon PHP is a web framework delivered as a C extension providing high
performance and lower resource consumption.

This is the official Phalcon blog you can adapt it to your own needs or improve it
if you want.

Please write us if you have any feedback.

Thanks.

Requirements
------------

This application uses Github as authentication system, you need a client id and secret id
set in the configuration (app/config/config.php)

* Http extension (pecl.php.net/package/pecl_http)
* Curl extension (http://php.net/manual/en/book.curl.php)
* Linux users that compile PHP --with-gettext=shared should include extension=gettext.so(php.ini), if have use XAMP default enable gettext

Phalcon extension > 0.9

Get Started
-----------

#### Requirements

To run this application on your machine, you need at least:

* >= PHP 5.3.3
* Apache Web Server with mod rewrite enabled
* Latest Phalcon Framework extension installed/enabled

Then you'll need to create the database and initialize schema:

    echo 'CREATE DATABASE blog' | mysql -u root
    cat schemas/blog.sql | mysql -u root blog

Install vendor use composer

	composer install

Element in project & Tests   
------------------
I use (Acl, Auth, Security) in [vokuro](https://github.com/phalcon/vokuro) project 	and I use editor Markdown in post content, also  used bootrsap 2.3.2 frontend and backend


How to use project:
http://localhost/login

	username:admin@gmail.com
	pass	:eduapp!@#$%
Note
------
I am use Nginx webserver, If problem css change 'baseUri' in config
Thank You
---------
Thank you Phalcon forum suport, and more...

License
-------
Blog is open-sourced software licensed under the New Apache License.
