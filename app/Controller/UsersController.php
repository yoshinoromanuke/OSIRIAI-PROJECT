<?php
class UsersController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');

	public function beforeFilter() {
	        parent::beforeFilter();//parentで継承した親クラスのbeforeFilter()を実行する
	        $this->Auth->allow('add','login','index');//ログインしなくてもアクセスできるもの、add
	    }

	public function index() {
	        $this->set('users', $this->User->find('all'));
	    }


}
?>