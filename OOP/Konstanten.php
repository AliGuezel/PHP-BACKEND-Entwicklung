<?php

define('MAX_VALUE1', 128);
echo MAX_VALUE1;
echo '<br>';

const MAX_VALUE2 = 256;
echo MAX_VALUE2;
echo '<hr>';
class BeispielKonstanten {
    
    const MAX_VALUE3 = 512;
    private const MAX_VALUE4 = 1024;
        
    public function __construct() {
        echo MAX_VALUE1; 
        echo '<br>';
        echo MAX_VALUE2;
        echo '<br>';
        echo self::MAX_VALUE3;
        echo '<br>';
        echo self::MAX_VALUE4;
        echo '<br>';
        
    }
}
$obj = new BeispielKonstanten();
echo BeispielKonstanten::MAX_VALUE3;
