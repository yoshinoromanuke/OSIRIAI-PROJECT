<h1>Blog Categories</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>

    <!-- ここから、$each_categorys配列をループして、投稿記事の情報を表示 -->
	<?php foreach ($categories as $each_category): ?>
    <tr>
        <td><?php echo $each_category['Category']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($each_category['Category']['name'],
array('controller' => 'categories', 'action' => 'view', $each_category['Category']['id'])); //いまリンクないからどうしたらええんや？?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $each_category['Category']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $each_category['Category']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($each_category); ?>
</table>

