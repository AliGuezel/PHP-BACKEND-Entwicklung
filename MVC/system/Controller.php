<?php

namespace system;

abstract class Controller {
    
    protected $view;
    
    public function __construct() {
        echo "Konstruktor vom Haupt-Controller<br>";
        $this->view = new View();
    }
}
