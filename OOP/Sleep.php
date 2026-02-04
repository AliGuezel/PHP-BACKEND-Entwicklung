<?php

//$haupstadt = [
//    'Deutschland'   => 'Berlin',
//    'Schweiz'       => 'Bern',
//    'Italien'       => 'Rom',
//];
//
//echo $str = serialize($haupstadt);
//
//$array = unserialize($str);
//
//echo '<pre>';
//print_r($array);
//echo '</pre>';

class BeispielSleep {
    public $eigenschaft1 = 10;
    protected $eigenschaft2 = 20;
    private $eigenschaft3 = 30;
    public $eigenschaft4 = 40;
       
}

$obj = new BeispielSleep();
echo $str = serialize($obj);

$obj2 = unserialize($str);

echo '<pre>';
print_r($obj2);
echo '</pre>';
