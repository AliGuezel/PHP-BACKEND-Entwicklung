<?php 
// call-by-value-Funktion 
function addieren($zahl1, $zahl2) {
	$ergebnis = $zahl1 + $zahl2;
	return $ergebnis;
}
$var = 3;
$zahl = addieren($var,4);
$zahl++;
echo $zahl;





