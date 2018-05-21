<?php

namespace backend\core;

use backend\lib\Db;

abstract class Model {

    public $db;

    public function __construct() {
        $this->db = new Db();

    }
}