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
*Linux users that compile PHP --with-gettext=shared should include
	extension=gettext.so(php.ini), if have use XAMP default enable gettext

NOTE
----
The master branch will always contain the latest stable version. If you wish
to check older versions or newer ones currently under development, please
switch to the relevant branch.

Required version: >= 0.9.0

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

Tests
-----
   
Element in project
------------------
I use (Acl, Auth, Security) in vokuro project https://github.com/phalcon/vokuro	
I use editor CKeditor in post content, prettify highlight http://code.google.com/p/google-code-prettify/

I use bootrsap 2.3.2 frontend and backend
How to use project:
http://localhost/login

	username:admin@gmail.com
	pass	:eduapp!@#$%
Note
------
If problem css change 'baseUri' in config
Thank You
---------
Thank you Phalcon forum suport, and more...
License
-------
Blog is open-sourced software licensed under the New BSD License.
