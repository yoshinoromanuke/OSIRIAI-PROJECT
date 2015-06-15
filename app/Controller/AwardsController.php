<?php
class AwardsController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');


	public function index() {
	        $this->set('awards', $this->Category->find('all'));
	    }


}
?>