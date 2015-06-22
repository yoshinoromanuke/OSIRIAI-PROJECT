<!-- app/View/Users/add.ctp -->    
    <h2>Add User</h2>

    <div class="well">
	    <?php
	    echo $this->Form->create('User',array('role'=>'form'));
		echo $this->Form->input('username',array('div' => array('class'=>'form-group'),'class'=>'form-control'));
		echo $this->Form->input('password',array('div' => array('class'=>'form-group'),'class'=>'form-control'));
		
	    echo $this->Form->button('<span class="glyphicon glyphicon-ok"></span> Save User',array('type'=>'submit','class'=>'btn btn-primary','label'=>false,'escape'=>false));
	
		echo $this->Form->end();
		
	    ?>
</div>