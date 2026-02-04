<?php

function classLoader1($className) {
    echo 'classLoader1<br>';
    if(file_exists('classes/'.$className.'.php')) {
        require 'classes/'.$className.'.php';
    }
}
function classLoader2($className) {
    echo 'classLoader2<br>';
    if(file_exists('classes2/'.$className.'.class.php')) {
        require 'classes2/'.$className.'.class.php';
    }
}
spl_autoload_register('classLoader1');
spl_autoload_register('classLoader2');


//$obj = new KlasseB();
//$obj2 = new KlasseA();
$obj3 = new KlasseC();



