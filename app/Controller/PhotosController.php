<?php
class PhotosController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');


	public function index() {
	        $this->set('photos', $this->Category->find('all'));
	    }


}
?>