<?php
 
//【1】facebook認証
App::uses('AppController', 'Controller');
App::import('Vendor','facebook',array('file' => 'facebook'.DS.'src'.DS.'facebook.php'));

use Facebook\GraphUser;
use Facebook\FacebookRequestException;
 
class FbconnectController extends AppController {
    public $name = 'Fbconnect';
    public $helpers = array('Html', 'Form','Session','Uploadpack.Upload');

 
    function index(){
        $this->layout = 'loginLayout';

    }
 
    function showdata(){//トップページ
        $facebook = $this->createFacebook(); //【2】アプリに接続
        $myFbData = $this->Session->read('mydata');       //【3】facebookのデータ
        $this->set('myFbData', $myFbData);
    }
 
    //facebookの認証処理部分
    public function facebook(){
        $this->autoRender = false;
        $this->facebook = $this->createFacebook();
        $user = $this->facebook->getUser();       //【4】ユーザ情報取得
        if($user){//認証後
            $me = $this->facebook->api('/me','GET',array('locale'=>'ja_JP'));  //【5】ユーザ情報を日本語で取得
            $this->Session->write('mydata',$me);      //【6】ユーザ情報をセッションに保存
                      
            $this->redirect(array('controller'=>'Users','action'=>'index'));
        }else{//認証前
            $url = $this->facebook->getLoginUrl(array(
            'scope' => 'email,user_birthday, user_education_history, user_photos, user_work_history,user_hometown','canvas' => 1,'fbconnect' => 0));   //【7】スコープの確認
            $this->redirect($url);
        }
    }
 
    private function createFacebook() {        //【8】appID, secretを記述
        return new Facebook(array(
            'appId' => '842599362476564',
            'secret' => '9b60e0c53c2a83d6c0f11704bf69f0d5'
        ));
    }

    public function logout(){
    $facebook = new Facebook(array(
      'appId'  => Configure::read("842599362476564"),
      'secret' => Configure::read("9b60e0c53c2a83d6c0f11704bf69f0d5"),
    ));
    $params = array( 'next' => 'http://dev.oshiriai.com/OSIRIAI_PROJECT/Fbconnect/index');
    $logoutUrl = $facebook->getLogoutUrl($params);
    $facebook->destroySession();
    $this->redirect(array('controller'=> 'Fbconnect', 'action' => 'index'));
    $this->Session->setFlash(__('logout'));

}




}
