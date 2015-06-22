<?php
class VisitsController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');


	public function index() {
	        $this->set('visits', $this->Visit->find('all'));
	    }


}
?>