<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
// facebook login
// App::import("Vendor", "FacebookSDK", array("file" => "php-sdk/autoload.php")); 

App::import('Vendor', 'FacebookRedirectLoginHelper', array('file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookRedirectLoginHelper.php'));
App::import('Vendor', 'FacebookSDKException', array('file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookSDKException.php'));
App::import('Vendor', 'FacebookSession', array('file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookSession.php'));
App::import('Vendor', 'FacebookRequest', ['file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookRequest.php']);
App::import('Vendor', 'FacebookRequestException', ['file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookRequestException.php']);

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;

FacebookSession::setDefaultApplication('842599362476564', '9b60e0c53c2a83d6c0f11704bf69f0d5');



//$helper = new new \Facebook\FacebookRedirectLoginHelper($redirect_url, '842599362476564', '9b60e0c53c2a83d6c0f11704bf69f0d5'); 
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $helpers = array(
		'Session',
		'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
		'Form' => array('className' => 'BoostCake.BoostCakeForm'),
		'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
	);


	public $components = array(
        'Session',
    	'DebugKit.Toolbar',

        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
        	'authorize' => array('Controller'),
        	'flash' => array(
				'element' => 'alert',
				'key' => 'auth',
			'params' => array(
					'plugin' => 'BoostCake',
					'class' => 'alert-error'
				) // この行を追加しました
        	)                
    )
    );
    public function beforeFilter() {
        $this->Auth->allow();
    }


    public function isAuthorized($user) {
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }

    // デフォルトは拒否
    return false;
	}
}
