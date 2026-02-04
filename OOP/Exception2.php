<?php

class MyException extends Exception {
    
    public function __toString() {
        $str = 'Fehler: ' . $this->getMessage() . '<br>';
        $str.= 'Code: ' . $this->getCode() . '<br>'; 
        $str.= 'Datei: ' . $this->getFile() . '<br>';
        $str.= 'Zeile: ' . $this->getLine() . '<br>';
        return $str;
    }
}

function dividieren($zahl1, $zahl2) {
    if($zahl2 == 0) {
        throw new MyException('Teilen durch Null ist nicht definiert', 42);
    } else {
        return $zahl1 / $zahl2;
    }
}
try {
    echo dividieren(9, 0);
} catch (Exception $e) {
    echo $e;
}