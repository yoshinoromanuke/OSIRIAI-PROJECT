<?php
class CategoriesController extends AppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');


	public function index() {
	        $this->set('categories', $this->Category->find('all'));
	    }

	public function add() {
	        if ($this->request->is('post')) {
	            $this->Category->create();
	            if ($this->Category->save($this->request->data)) {
	                $this->Session->setFlash(__('Your post has been saved.'));
	                return $this->redirect(array('action' => 'index'));
	            }
	            $this->Session->setFlash(__('Unable to add your post.'));
	        }
	    }

  	public function view($id = null) {
	        if (!$id) {
	            throw new NotFoundException(__('Invalid post'));
	        }

	        $category = $this->Category->findById($id); //この文章ではfind('all')ですべてのデータを取ってくるのではなく、findById($id)でSELECT * FROM Category(モデル名) WHERE id=$idのようにWHERE以下の条件に従うデータだけを取ってくる
	        if (!$category) {
	            throw new NotFoundException(__('Invalid post'));
	        }
	        $this->set('category', $category);
	    }



}
?>