<?php

class Model {
    protected $db;

    public function __construct() {
        $this->db = new PDO(
        "mysql:host=".dbHost .
        ";dbname=".dbName.";charset=utf8", 
        User, Password);
        $this->_deploy();
    }

    private function _deploy(){
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if(count($tables) == 0) {
            $sql =<<<END

		END;
        $this->db->query($sql);
        }
    }
}

