<?php 

/*
$zahl1 = 8;
$zahl2 = 4;

$temp  = $zahl1; 
$zahl1 = $zahl2;
$zahl2 = $temp;

echo $zahl1;
echo '<br>';
echo $zahl2;
*/ 
/*
function tauschen($zahl1, $zahl2) {
	$temp  = $zahl1; 
	$zahl1 = $zahl2;
	$zahl2 = $temp;
	return [$zahl1, $zahl2];
}
$z1 = 4;
$z2 = 8;
$array = tauschen($z1, $z2);
$z1 = $array[0];
$z2 = $array[1];
echo $z1;
echo '<br>';
echo $z2;
*/
// call-by-reference
function tauschen(&$zahl1, &$zahl2) {
	$temp  = $zahl1; 
	$zahl1 = $zahl2;
	$zahl2 = $temp;
}
$z1 = 4;
$z2 = 8;
tauschen($z1, $z2);
echo $z1;
echo '<br>';
echo $z2;