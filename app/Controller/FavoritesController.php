<?php
App::uses('AppConroller', 'Controller');


class FavoritesController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');

	public function beforeFilter() {
		    parent::beforeFilter();//parentで継承した親クラスのbeforeFilter()を実行する
		    $this->Auth->allow('fans');//ログインしなくてもアクセスできるもの、add
		}

	public function index() {
	        $this->set('favorites', $this->Favorite->find('all'));
	        $myFbData = $this->Session->read('mydata');       //【3】facebookのデータ
	        $this->set('myFbData', $myFbData);
	    
	        //active
	        if($this->action='index'){
	        	$active3='active';
	        }else{
	        	$active3='';
	        }

	        $active1='';
			$active2='';
	        $active4='';
			$this->set('active1',$active1);
	        $this->set('active2',$active2);
			$this->set('active3',$active3);
			$this->set('active4',$active4);

	    }

	    
	    

	public function fans() {
		        $this->set('favorites', $this->Favorite->find('all'));
		        $myFbData = $this->Session->read('mydata');       //【3】facebookのデータ
	        $this->set('myFbData', $myFbData);
		   
		        //active
	        if($this->action4='fans'){
	        	$active4='active';
	        }else{
	        	$active4='';
	        }
	        $active1='';
			$active2='';
	        $active3='';

			$this->set('active1',$active1);
	        $this->set('active2',$active2);
			$this->set('active3',$active3);
			$this->set('active4',$active4);

	    }

		    
}
?>