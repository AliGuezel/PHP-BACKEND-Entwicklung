<?php

namespace system;

abstract class Model {
    
    private $db;
    
    public function __construct() {
        echo 'Konstruktor vom Haupt-Model<br>';
        $this->db = new Database();
    }
}
