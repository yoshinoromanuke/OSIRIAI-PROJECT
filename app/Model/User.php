<?php
//Usr.php

App::uses('AppModel', 'Model');

class User extends AppModel {

    var $actsAs = array(
    'UploadPack.Upload' => array(
        'image' => array(     ☆ここでは、"_file_name"を除いたカラム名を書く
            'quality' => 95,   ☆画質指定、デフォルトでは75
            'styles' => array(
                'thumb' => '85x85'  ☆リサイズしたいサイズを書く
            )
        )
    ),
    );


    
	public $validate = array(
        'id' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'facebook_id' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'gender' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'picture' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'birthday' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'mail' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'languages' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'city' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'nation' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'education' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'work' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'objective' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'introduction' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'current_location' => array(
            'required' => array(
                'rule' => array('notEmpty'),
        	),
        ),
        'created' => array(
            'datetime' => array(
                'rule' => array('datetime'),
            ),
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            ),
        ),
        'created_user_id' => array(
            'datetime' => array(
                'rule' => array('datetime'),
            ),
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            ),
        ),
        'modified' => array(
            'datetime' => array(
                'rule' => array('datetime'),
            ),
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            ),
        ),
        'modified_user_id' => array(
            'datetime' => array(
                'rule' => array('datetime'),
            ),
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            ),
        ),
    );
}

//     public function beforeSave($options = array()) {
//     if (isset($this->data[$this->alias]['password'])) {//$this->aliasには同じクラス名、この場合USERがはいる
//         $passwordHasher = new BlowfishPasswordHasher();
//         $this->data[$this->alias]['password'] = $passwordHasher->hash(
//             $this->data[$this->alias]['password']
//         );
//     }
//     return true;


// }
?>