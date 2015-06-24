<?php
App::uses('AppConroller', 'Controller', 'FbconnectController');
// App::import('Vendor', 'FacebookRedirectLoginHelper', array('file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookRedirectLoginHelper.php'));
// App::import('Vendor', 'FacebookSDKException', array('file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookSDKException.php'));
// App::import('Vendor', 'FacebookSession', array('file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookSession.php'));
// App::import('Vendor', 'FacebookRequest', ['file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookRequest.php']);
// App::import('Vendor', 'FacebookRequestException', ['file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookRequestException.php']);

App::import('Vendor','facebook',array('file' => 'facebook'.DS.'src'.DS.'facebook.php'));


use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
// use Facebook\FacebookRequest;
// use Facebook\GraphUser;
// use Facebook\FacebookResponse;
// use Facebook\FacebookSDKException;
// use Facebook\FacebookRequestException;
// use Facebook\FacebookAuthorizationException;
// use Facebook\GraphObject;
// use Facebook\Entities\AccessToken;
// use Facebook\HttpClients\FacebookCurlHttpClient;
// use Facebook\HttpClients\FacebookHttpable;


// App::import('Vendor', 'FacebookRedirectLoginHelper', array('file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookRedirectLoginHelper.php'));
// App::import('Vendor', 'FacebookSDKException', array('file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookSDKException.php'));
// App::import('Vendor', 'FacebookSession', array('file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookSession.php'));
// App::import('Vendor', 'FacebookRequest', ['file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookRequest.php']);
// App::import('Vendor', 'FacebookRequestException', ['file' => 'FacebookSDK' . DS . 'src' . DS . 'FacebookRequestException.php']);

// use Facebook\FacebookSession;
// use Facebook\FacebookRequest;
// use Facebook\GraphUser;
// use Facebook\FacebookRequestException;

//FacebookSession::setDefaultApplication('app_id', 'app_secret');

class UsersController extends AppController {
    public $helpers = array('Html', 'Form','Session','Uploadpack.Upload');
    public $components = array('Session');

	//  public function beforeFilter() {
	//         parent::beforeFilter();//parentで継承した親クラスのbeforeFilter()を実行する
	//         $this->Auth->allow('config','others');//ログインしなくてもアクセスできるもの、add
	//     }
	// public function index() {
			

	// }

	// public function config() {


	// }
	
	// public function others() {


	// }

   	

	 public $Facebook;

	public function beforeFilter(){
		// $helper = new \Facebook\FacebookRedirectLoginHelper(Router::url('/', true), 
		// 	$appId='842599362476564', 
		// 	$secret='9b60e0c53c2a83d6c0f11704bf69f0d5'
		// );
		$this->Facebook = new \Facebook\FacebookRedirectLoginHelper(Router::url('/', true),
            $appId='842599362476564', 
		 	$secret='9b60e0c53c2a83d6c0f11704bf69f0d5'
        );
        $this->Auth->allow('login','index','config','connectfacebook');
	}


	// public $name = 'Fbconnect';

	public function index() {
//kokodeha profile ni hituyouna data wo model -> view ni watasu shori  wo kaku.

	        $myFbData = $this->Session->read('mydata');       //【3】facebookのデータ
	        $this->set('myFbData', $myFbData);
		
	        $active1='';
	        $active2='';
			$active3='';
	        $active4='';

	        $this->set('active1',$active1);
	        $this->set('active2',$active2);
			$this->set('active3',$active3);
			$this->set('active4',$active4);


			// if ($this->Auth->loggedIn()) {
	  //           $this->Session->setFlash(__('ログインしています。'));
	  //       } else {
	  //           $this->Session->setFlash(__('ログインしていません。'));
	  //       }
	  //   }

			// if ($this->Auth->loggedIn()) {
	            // $facebookId = $this->Facebook->getUser();
	            // $this->set('user', $this->User->find('first', ['conditions' => ['User.facebook_id' => $facebookId]]));
	        // } else {
	        //     $this->redirect(['action' => 'logout']);
	        // }
	   	}

	public function config() {
	            // $this->set('user', $this->User->find('first', ['conditions' => ['User.id' => $facebookId]]));
			$myFbData = $this->Session->read('mydata');       //【3】facebookのデータ
	        $this->set('myFbData', $myFbData);
		
	        $active1='';
	        $active2='';
			$active3='';
	        $active4='';

	        $this->set('active1',$active1);
	        $this->set('active2',$active2);
			$this->set('active3',$active3);
			$this->set('active4',$active4);

		}

	public function connectfacebook() {
		 // session_start();
		// added in v4.0.0
		// $base_dir = defined('FacebookSDK') ? FacebookSDK : __DIR__ . '/src/';
		// require_once ($base_dir.'autoload.php');
		
		// init app with app id and secret
		FacebookSession::setDefaultApplication('842599362476564', '9b60e0c53c2a83d6c0f11704bf69f0d5');

		// login helper with redirect_uri
		$helper = new FacebookRedirectLoginHelper('http://192.168.33.20/OSIRIAI_PROJECT/users/');
		// $loginUrl = $helper->getLoginUrl();

		// $loginUrl = $helper->getLoginUrl();
		// header("Location: ".$loginUrl);

		define('FacebookSDK', "/FacebookSDK/src/Facebook/");
		require __DIR__ . '/FacebookSDK/autoload.php';



		try {
		  $session = $helper->getSessionFromRedirect();
		} catch( FacebookRequestException $ex ) {
		  // When Facebook returns an error
		  	// $this->Html->link('login');
		} catch( Exception $ex ) {
		  // When validation fails or other local issues
		  	// $this->Html->link('login');
		}

// see if we have a session
debug($session);
		if ($session) {
		  // graph api request for user data
		  $request = new FacebookRequest( $session, 'GET', '/me' );
		  $response = $request->execute();
		  // get response
		  $graphObject = $response->getGraphObject();
		  echo $graphObject->getProperty('name');
		  // print data
		  echo  print_r( $graphObject, 1 );
		} else {
		  // show login url
		  echo '<a href="' . $helper->getLoginUrl() . '">Login</a>';
		}
		// //Get the Graphuser object for the current user 1
		// try {
		//   $me = (new FacebookRequest(
		//     $session, 'GET', '/me'
		//   ))->execute()->getGraphObject(GraphUser::className());
		//   echo $me->getName();
		// } catch (FacebookRequestException $e) {
		//   // The Graph API returned an error
		// } catch (\Exception $e) {
		//   // Some other error occurred
		// }


		// $loginUrl = $helper->getLoginUrl();
		// try {
		//   $session = $helper->getSessionFromRedirect();
		// } catch(FacebookRequestException $ex) {
		//   // When Facebook returns an error
		// } catch(\Exception $ex) {
		//   // When validation fails or other local issues
		// }
		// if ($session) {
		//   // Logged in
		// 	$this->Html->link('index');
// $object = $response->getGraphObject();

		// Get the response typed as a GraphUser
		$id = $response->getGraphObject(GraphUser::className());

		$user = $this->User->find('first', ['conditions' => ['User.id' => $id]]);
        if (!empty($user['User'])) {
            if ($this->Auth->login($user['User'])) {
                $this->redirect(['action' => 'index']);
            }
        } else {
            $this->_add();
        }
        	$this->redirect(['action' => 'logout']);
    	}







		// $user = $this->User->find('first', ['conditions' => ['User.id' => $facebookId]]);
  //       if (!empty($user['User'])) {
  //           if ($this->Auth->login($user['User'])) {
  //               $this->redirect(['action' => 'index']);
  //           }
  //       } else {
  //           $this->_add();
  //       }
 
  //       // $this->redirect(['action' => 'logout']);



		// if ($this->request->is('post')) {
		// 	if(!empty($this->data)){
		//     	if(isset($this->request->data['login'])) {
		//         	//login
		//     		$helper = new FacebookRedirectLoginHelper('your redirect URL here');
		// 			$loginUrl = $helper->getLoginUrl();

		 
		//       }
		//    }
		// }

	






	public function login() {
		
	
		$this->layout = 'loginLayout';

        //$this->autoRender = false;
        // facebook OAuth login
        // $facebookId = $this->Facebook->getUser();
        // if (!$facebookId) {
        //     $this->_authFacebook();
        // }
 
        // $user = $this->User->find('first', ['conditions' => ['User.id' => $facebookId]]);
        // if (!empty($user['User'])) {
        //     if ($this->Auth->login($user['User'])) {
        //         $this->redirect(['action' => 'index']);
        //     }
        // } else {
        //     $this->_add();
        // }
 
        // $this->redirect(['action' => 'logout']);
    }

	protected function _authFacebook() {
        $loginUrl = $this->Facebook->getLoginUrl(['redirect_uri' => Router::fullBaseUrl() . Router::url(['controller' => 'users', 'action' => 'login'])]);
        return $this->redirect($loginUrl);
    }
 
    public function logout() {
        $this->Facebook->destroySession();
        $this->redirect($this->Auth->logout());
    }
 
    protected function _add() {
        // $this->autoRender = false;
//protected function _
//de class noyouna jisakukansuu wo kakeru
//
//

//database
//
//tourokuzuminara database kara tottekuru kyodou wo kaku
//for new user

    	// Get the base class GraphObject from the response
		$object = $response->getGraphObject();

		// Get the response typed as a GraphUser
		$id = $response->getGraphObject(GraphUser::className());
		$name = $response->getGraphObject(GraphUser::className());
		$gender = $response->getGraphObject(GraphUser::className());
		$picture = $response->getGraphObject(GraphUser::className());
		$birthday = $response->getGraphObject(GraphUser::className());
		$mail = $response->getGraphObject(GraphUser::className());
		$languages = $response->getGraphObject(GraphUser::className());
		$city = $response->getGraphObject(GraphUser::className());
		$nation = $response->getGraphObject(GraphUser::className());
		$education = $response->getGraphObject(GraphUser::className());
		$work = $response->getGraphObject(GraphUser::className());
		
		$loc = $response->getGraphObject(GraphLocation::className());
		// or convert the base object previously accessed
		// $loc = $object->cast(GraphLocation::className());





        $facebookInfo = $this->Facebook->api('/me', 'GET');
        $user = array(
            'User' => [
                'facebook_Id' => $facebookInfo['id'],
                'name' => $facebookInfo['name'],
                'gender' => $facebookInfo['gender'],
                'picure' => $facebookInfo['picture'],
                'birthday' => $facebookInfo['birthday'],
                'mail' => $facebookInfo['mail'],
                'languages' => $facebookInfo['languages'],
                'city' => $facebookInfo['city'],
                'nation' => $facebookInfo['nation'],
                'education' => $facebookInfo['education'],
                'work' => $facebookInfo['work'],
                // 'current_location' => $facebookInfo['name'],
                 ]
        );
        $this->User->create();

        if ($this->User->save($user)) {
            $this->Session->setFlash(__('登録が完了しました。'));
        } else {
            $this->Session->setFlash(__('登録てきません.'));
        }
 
        $this->redirect(['action' => 'index']);
    }




}
?>