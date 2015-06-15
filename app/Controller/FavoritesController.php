<?php
class FavoritesController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');


	public function index() {
	        $this->set('favorites', $this->Category->find('all'));
	    }


}
?>