<?php

//require_once 'classes/a/KlasseA.php';
//require_once 'classes/b/KlasseA.php';

spl_autoload_extensions('.php,.lib.php,.class.php');
spl_autoload_register(function($className){
    spl_autoload($className);
});

$obj1 = new classes\a\KlasseA();
$obj2 = new classes\b\KlasseA();
$obj3 = new classes\a\KlasseB();
$obj4 = new classes\b\KlasseB();
echo '<hr>';

// Angabe der Klasse die verwendet werden soll
use classes\b\KlasseB;
$obj5 = new KlasseB();
echo '<hr>';
// Alias für den namespace
use classes\a as Beispiel;
$obj6 = new Beispiel\KlasseA();
echo '<hr>';
// Alias für die Klasse 
use classes\b\KlasseA as BeispielA;
$obj7 = new BeispielA;
