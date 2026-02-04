<?php

class IndexController extends system\Controller{
    public function __construct() {
        parent::__construct();
        echo "Objekt vom IndexController<br>";
    }
    
    public function methode1() {
        echo "Methode 1 vom IndexController<br>";
    }
    
    public function methode2($value = '') {
        echo "Methode 2 vom IndexController<br>";
        echo "Wert: "  . $value . "<br>"; 
    }
    
    public function methode3() {
       echo "Methode 3 vom IndexController<br>";
       $this->view->vorname = 'Thomas';
       $this->view->render('welcome');
    }
    
}
