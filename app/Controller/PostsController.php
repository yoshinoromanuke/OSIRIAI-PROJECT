<?php
class PostsController extends AppController {
    //Controller is custumized by OPTION
    
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session');
    public $uses=array('Post', 'Category');//usesプロパティで使用するモデルの指定。thisにより指定可能になる   

    //Controller uses many METHOD
    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id); //この文章ではfind('all')ですべてのデータを取ってくるのではなく、findById($id)でSELECT * FROM posts WHERE id=$idのようにWHERE以下の条件に従うデータだけを取ってくる
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    // public function add() {
    //     if ($this->request->is('post')) {
    //         $this->Post->create();
    //         if ($this->Post->save($this->request->data)) {
    //             $this->Session->setFlash(__('Your post has been saved.'));
    //             return $this->redirect(array('action' => 'index'));
    //         }
    //         $this->Session->setFlash(__('Unable to add your post.'));
    //     }
    // }

    public function add() {
    if ($this->request->is('post')) {
        $this->request->data['Post']['user_id'] = $this->Auth->user('id'); //Added this line
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been saved.'));
            $this->redirect(array('action' => 'index'));
        }
    }
    }

    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Post->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Post->id = $id;
        var_dump($this->request->data);
        if ($this->Post->save($this->request->data)){
            $this->Session->setFlash(__('Your post has been updated.'));
            //return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $post;
    }
	}	

	public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException(); //　Getファンクションを許してしまうと、delete/idを直接指定されてしまい、消されたくないものも消されてしまう恐れがある。
        }

        if ($this->Post->delete($id)) {
            $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
	}

    public function category_index($category_id=null){

        $posts = $this->Post->find('all',array('conditions'=>array('category_id'=>$category_id)));//conditionsでwhere句をかける
        $categories=$this->Category->findById($category_id);//find('first')は条件に合致する最初の一個のみをとってくる。
        //$categories=$this->Category->find('first',array('conditions'=>array('id'=>$category_id)));//find('first')は条件に合致する最初の一個のみをとってくる。
        
        $this->set(compact('posts','categories'));
        //$this->set(compact('categories'));//compactはコントローラーと一緒の名前で変数をビューに渡すときにつかう。より見やすくなるよね    

    }

    public function isAuthorized($user) {
    // 登録済ユーザーは投稿できる
    if ($this->action === 'add') {
        return true;
    }

    // 投稿のオーナーは編集や削除ができる
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = (int) $this->request->params['pass'][0];
        if ($this->Post->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}

}

?>