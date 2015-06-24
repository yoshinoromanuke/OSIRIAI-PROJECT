<?php
class MessagesController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');


	public function index() {
	        $this->set('messages', $this->Message->find('all'));
	    
	    	if($this->action='index'){
	        	$active2='active';
	        }else{
	        	$active2='';
	        }
	        $active1='';
			$active3='';
	        $active4='';

			$this->set('active1',$active1);
	        $this->set('active2',$active2);
			$this->set('active3',$active3);
			$this->set('active4',$active4);

	    }


	    }



}
?>