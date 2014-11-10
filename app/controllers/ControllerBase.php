<?php

namespace Phalconvn\Controllers;

use Phalcon\Mvc\Controller,
    Phalcon\Mvc\Dispatcher;

/**
 * ControllerBase
 *
 * This is the base controller for all controllers in the application
 */
class ControllerBase extends Controller
{
    public function beforeExecuteRoute(Dispatcher $dispatcher)
    {
        $controllerName = $dispatcher->getControllerName();

        //Only check permissions on private controllers
        if ($this->acl->isPrivate($controllerName)) {
            $this->assets
            ->addCss('css/bootstrap2.css')
            ->addCss('css/bootstrap-responsive.css');
           // ->addCss('css/admin.css');

            //Get the current identity
            $identity = $this->auth->getIdentity();

            //If there is no identity available the user is redirected to index/index
            if (!is_array($identity)) {

                $this->flash->notice('You don\'t have access to this module: private');

                $dispatcher->forward(array(
                    'controller' => 'index',
                    'action' => 'index'
                ));
                return false;
            }

            //Check if the user have permission to the current option
            $actionName = $dispatcher->getActionName();
            if (!$this->acl->isAllowed($identity['profile'], $controllerName, $actionName)) {

                $this->flash->notice('You don\'t have access to this module: ' . $controllerName . ':' . $actionName);

                if ($this->acl->isAllowed($identity['profile'], $controllerName, 'index')) {
                    $dispatcher->forward(array(
                        'controller' => $controllerName,
                        'action' => 'index'
                    ));
                } else {
                    $dispatcher->forward(array(
                        'controller' => 'user_control',
                        'action' => 'index'
                    ));
                }

                return false;
            }

        } else{
            $this->assets
                ->addCss('css/style.css');    
        }
        
        //adding js 
        $this->assets
            ->addJs('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false)
            ->addJs('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js', false)
            ->addJs('//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', false);
            

        //set language
        $locality = $this->session->get('language').'.UTF-8';
        if (defined('LC_MESSAGES')) {
            setlocale(LC_ALL, $locality); // Linux
        } else {
            putenv("LC_ALL={$locality}"); // windows
        }
        bindtextdomain('messages','../app/lang');

        //Tell the application to use this text domain, or messages.mo.
        textdomain('messages');
    }

}
