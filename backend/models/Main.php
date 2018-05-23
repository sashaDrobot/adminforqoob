<?php

namespace backend\models;

use backend\core\Model;

class Main extends Model {

    public function insertOrder($params) {
        $this->db->query('INSERT INTO orders VALUES (NULL, :name, :phone, :email, :text, CURDATE(), 0);', $params);
    }

}