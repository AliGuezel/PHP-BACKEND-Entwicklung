<?php 

$zahl1 = 7;
$zahl2 = &$zahl1;
$zahl1 = 4;

echo $zahl1;
echo '<br>';
echo $zahl2;

