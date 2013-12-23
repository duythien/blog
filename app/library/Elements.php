<?php namespace Nginx;

use Phalcon\Mvc\User\Component,
    Phalcon\Forms\Form;   

/**
 * Elements
 *
 * Helps to build UI elements for the application
 */
class Elements extends Component
{

    private $_headerMenu = array(
        'pull-left' => array(
            'index' => array(
                'caption' => '<img alt="Logo-small" src="/img/logofront.png"/>',
                'action' => ''
            ),
        ),
        'pull-right' => array(
            'users' => array(
                'caption' => 'Users',
                'action' => 'index'
            ),
            'contact' => array(
                'caption' => 'Contact',
                'action' => 'index'
            ),
            'login' => array(
                'caption' => 'Log In/Sign Up',
                'action' => null
            ),
            'about' => array(
                'caption' => 'About',
                'action' => 'index'
            ),
            'search'=> array(
                'caption' => '<form action="" id="search-form" method="get">
                          <input name="search[q]" type="text" placeholder="Search ..." id="book-search" />
                          </form>',
                'action' => 'index'
            ),
        )
    );


    /**
     * Builds header menu with left and right items
     *
     * @return string
     */
    public function getMenu()
    {
        $auth = $this->session->get('auth-front');
        if ($auth) {
            $this->_headerMenu['pull-right']['session'] = array(
                'caption' => 'Log Out',
                'action' => 'logout'
            );
        }
        else {
            unset($this->_headerMenu['pull-right']['users']);
        }
        echo '<div class="nav-collapse">';
        $controllerName = $this->view->getControllerName();
        foreach ($this->_headerMenu as $position => $menu) {
            echo '<ul class="nav ', $position, '">';
            foreach ($menu as $controller => $option) {
                if ($controllerName == $controller) {
                    echo '<li class="active">';
                } else {
                    echo '<li>';
                }
                if ($controller=="search") {
                echo $option['caption'];
                }
                else
                {
                echo \Phalcon\Tag::linkTo($controller.'/'.$option['action'], _($option['caption']));
                }
                echo '</li>';
            }

            echo '</ul>';

        }
        echo '</div>';

    }
   
   
}