<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
        'Session'
    );

    /**
     * Redirects the usesr to their proper home page.
     * 
     * Note: Currently sends committe chairs to the admin page
     */
    public function redirectToHome() {
        if(!$this->Session->check('User.UserType'))
        {
            $this->redirect(array('controller' => 'users', 'action' => 'login'));
        }

        $userType = $this->Session->read('User.userType');
        if(strcmp('CHURCH MEMBER', $userType) == 0)
        {
            $this->redirect(array('controller' => 'members', 'action' => 'index'));
        }
        elseif(strcmp('ADMIN', $userType) == 0)
        {
            $this->redirect(array('controller' => 'admin', 'action' => 'index'));
        }
        elseif(strcmp('COMMITTEE CHAIR', $userType) == 0)
        {
            $this->redirect(array('controller' => 'admin', 'action' => 'index'));
        }
        else
        {
            $this->redirect($this->referer(array('action' => 'index')));
        }
    }
    public function beforeFilter() {
        
        // Checks to see if the user has entered the password
        // if not, redirects them to the login page.
        if(!$this->Session->check('User.UserType'))
        {
            $this->redirect(array('controller' => 'users', 'action' => 'login'));
        }
    }

}
