<?php
class category extends AppModel {
	
	public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>