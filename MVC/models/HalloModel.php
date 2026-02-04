<?php

class HalloModel extends system\Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function addieren($zahl1, $zahl2) {
        return $zahl1 + $zahl2;
    }
    
    public function addNews() {
        
    }
    
}
