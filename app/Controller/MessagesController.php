<?php
class MessagesController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');


	public function index() {
	        $this->set('messages', $this->Category->find('all'));
	    }


}
?>