<?php

// tabla db se debe escribir en plural y en minisculas y , la primera mayuscula y despues minuscula

    class Student extends AppModel {
        public $validate = array(
            'nombre'=>array('rule' => 'notEmpty'),
            'last_name' => array('rule' => 'notEmpty')
        );
    }



?>