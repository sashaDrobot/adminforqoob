<?php

namespace backend\models;

use backend\core\Model;

class Admin extends Model {

	public $error;

	public function loginValidate($post) {
		$config = require 'backend/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}

    public function isOrderExists($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM orders WHERE id = :id', $params);
    }

	public function selectOrders() {
	    return $vars = $this->db->row('SELECT * FROM orders');
    }

    public function orderDelete($id) {
        $params = [
            'id' => $id,
        ];
        $this->db->query('DELETE FROM orders WHERE id = :id', $params);
    }

}