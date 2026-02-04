<?php

class BeispielFinaleMethode {
    
    /*
     * Eine finale Methode kann in der Kindklasse nicht überschrieben werden.
     */
    public final function methode1() {
        echo 'Methode 1<br>';
    }
    
}
class Tochter extends BeispielFinaleMethode {
    
    public function methode1() {
        
    }
    
}

$obj = new Tochter();
$obj->methode1();