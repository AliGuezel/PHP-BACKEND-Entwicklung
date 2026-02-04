<?php

class HalloController extends system\Controller{
    public function __construct() {
        parent::__construct();
        echo "Objekt vom HalloController<br>";
    }
    
    public function methode1() {
        echo "Methode 1 vom HalloController<br>";
    }
    
    public function methode2($value = '') {
        echo "Methode 2 vom HalloController<br>";
        echo "Wert: "  . $value . "<br>"; 
    }
    
    public function methode3() {
        // Ersetzt durch den Autoloader
        // require_once 'models/HalloModel.php';
        $halloModel = new HalloModel();
        echo $halloModel->addieren(3, 4);
    }
    
}
