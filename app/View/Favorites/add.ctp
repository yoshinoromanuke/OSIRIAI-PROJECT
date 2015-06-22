<h1>Add Category</h1>
<?php
echo $this->Form->create('Category');//create('モデルの名前')
echo $this->Form->input('name');
echo $this->Form->end('Save Post');
?>