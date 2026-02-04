<?php

// Problem: Von einer Klasse darf maximal ein Objekt erzeugt werden
//class BeispielKlasse {
//
//    private static $counter = 0;
//    
//    public function __construct() {
//        self::$counter++;
//        if(self::$counter > 1) {
//           die("Zweites Objekt"); 
//        }
//    }
//}
//
//$obj1 = new BeispielKlasse();
//$obj2 = new BeispielKlasse();

// Singleton (Einzelstück)

class Singleton {
    
    private static $instance = null;

    private function __construct() {
    }
    
    private function __clone() {
    }
    
    public static function getInstance() {
       if(!self::$instance) {
           self::$instance = new Singleton();
       } 
       return self::$instance;
    }   
}

$obj  = Singleton::getInstance();
$obj2 = Singleton::getInstance();

//$obj = new Singleton();
//$new_obj = clone $obj;









