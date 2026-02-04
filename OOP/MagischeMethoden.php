<?php

class BeispielMagischeMethoden {
    
    public $eigenschaft1 = 10;
    protected $eigenschaft2 = 20;
    private $eigenschaft3 = 30; 
    
    /*
     * Der Auslöser der "Magischen Methode" __set() ist das setzen einer 
     * Eigenschaft die an dieser Stelle nicht existiert.
     */
    
    public function __set($name, $value) {
        echo 'Magische Methode __set()<br>';
        echo '$name: ' . $name . '<br>';
        echo '$value: ' . $value . '<br>';
        //throw new Exception("Eigenschaft $name existiert nicht");
        if($value >= 1 && $value <= 100) {
            $this->$name=$value;
        } else {
            throw new Exception("Ungültiger Wert");
        }
    }
     /*
     * Der Auslöser der "Magischen Methode" __get() ist das auslesen einer 
     * Eigenschaft die an dieser Stelle nicht existiert.
     */
    public function __get($name) {
        echo 'Magische Methode __get()<br>';
        echo '$name: ' . $name . '<br>';
        throw new Exception("Eigenschaft $name existiert nicht");
        //return 'Hallo Welt';
    }

    public function __call($name, $arguments) {
        echo 'Magische Methode __call()<br>';
        echo '$name: ' . $name . '<br>';
        echo '$arguments: ' . implode(', ', $arguments).'<br>';
        if($name == 'methode1') {
           echo '!TEST!<br>';            
        }
    }
}

try {
    $obj = new BeispielMagischeMethoden();
    //$obj->eigenschaft4 = 140;
    //echo $obj->eigenschaft100;
    $obj->methode1('eins','zwei');
} catch(Exception $e) {
    echo $e->getMessage();
}

echo '<pre>';
print_r($obj);
echo '</pre>';