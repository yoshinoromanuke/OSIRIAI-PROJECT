<?php
class WinnersController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');


	public function index() {
	        $this->set('winners', $this->Winner->find('all'));
	    }


}
?>