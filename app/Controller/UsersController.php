<?php
class UsersController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');


	public function index() {
	        $this->set('users', $this->Category->find('all'));
	    }


}
?>