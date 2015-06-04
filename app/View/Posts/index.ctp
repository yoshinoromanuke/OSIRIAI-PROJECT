

<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<?php echo $this->Html->link(
	    'Add Post',
	    array('controller' => 'posts', 'action' => 'add')
	); ?>

    
    <div class='row'>
        <table class="table table-striped　table-borderd table-hover table-condensed">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Category</th>
            <th>Action</th>
            <th>Created</th>
        </tr>
        <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
    	
        <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'],
    array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); //渡したい引数が複数の場合、コンマでうしろに並べていけば良いだけー?>
            </td>
            <td>
                <?php echo $this->Html->link($post['Category']['name'],
    array('controller' => 'posts', 'action' => 'category_index', $post['Category']['id'])); ?>
            </td>
            <td>
                <?php echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?'));
                ?>
                <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
        <?php endforeach; ?>
        <?php unset($post); ?>
        </table>
        
        
    </div>

