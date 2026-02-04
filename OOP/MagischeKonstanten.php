<?php

// Aktuelle Zeile
echo __LINE__;
echo '<hr>';

// Aktuelle Datei
echo __FILE__;
echo '<hr>';

// Aktuelles Verzeichnis
echo __DIR__;
echo '<hr>';

function beispielFunktion() {
   echo __FUNCTION__;
   echo '<hr>';
}
beispielFunktion();

class BeispielKlasse {
    
    public function beispielMethode() {
        echo __CLASS__;
        echo '<hr>';
        echo __METHOD__;
        echo '<hr>';
        echo __FUNCTION__;
        echo '<hr>';
    }
}

$obj = new BeispielKlasse();
$obj->beispielMethode();