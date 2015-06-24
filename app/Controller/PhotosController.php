<?php
App::uses('AppConroller', 'Controller');
App::import('vendor','facebook/php-sdk/src/facebook');

class PhotosController extends AppController {
    public $helpers = array('Html', 'Form','Session','Uploadpack.Upload');
    public $components = array('Session');


	public function index() {
	        $this->set('photos', $this->Photo->find('all'));


	        $myFbData = $this->Session->read('mydata');       //【3】facebookのデータ
	        $this->set('myFbData', $myFbData);
		
	        
//active
	        if($this->action='index'){
	        	$active1='active';
	        }else{
	        	$active1='';
	        }
	        $active2='';
			$active3='';
	        $active4='';

	        $this->set('active1',$active1);
	        $this->set('active2',$active2);
			$this->set('active3',$active3);
			$this->set('active4',$active4);

	    }


}
?>