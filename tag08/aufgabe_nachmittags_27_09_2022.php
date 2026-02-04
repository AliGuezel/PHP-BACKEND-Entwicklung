<?php 
// Aufgabe 1: 
// Schreiben Sie eine Funktion mit dem Namen "dieErstenFuenfZeichen()". Die Funktion 
// soll von einer zu übergebenden Zeichenkette die ersten 5 Zeichen zurückliefern.
// Tipp: Siehe PHP-Funktion substr()

function dieErstenFuenfZeichen($string) {
	return substr($string,0,5);
}

echo dieErstenFuenfZeichen('123456789');
echo '<hr>';

// Aufgabe 2: 
// Schreiben Sie eine Funktion mit dem Namen "stringWiederholen".
// Die Funktion soll eine zu übergebende Zeichenkette so oft wiederholen
// und ausgeben, wie es ein zweiter Parameterwert vorgibt.
function stringWiederholen($string, $anzahl) {
	for($i=0; $i<$anzahl; $i++) {
		echo $string;  
	}
}
stringWiederholen('X',5);
// Alternative mit Rückgabewert
echo '<hr>';
function stringWiederholen2($string, $anzahl) {
	$return = '';
	for($i=0; $i<$anzahl; $i++) {
		$return .= $string;  // $return = $return . $string;  	
	}	
	return $return;
}
echo stringWiederholen2('A',4);
echo '<hr>';

// Aufgabe 3:
// Schreiben Sie eine Funktion mit dem Namen "summeBerechnen()". Die Funktion
// soll die Summe für beliebig viele übergebende Zahlenwerte, die sich in einem Array befinden, zurückliefern.
// Die bereits existierende PHP-Funktion array_sum() soll für dieses Aufgabe nicht verwendet werden.
// Eine Prüfung, ob es wirklich nur Zahlenwerte sind, muss nicht durchgeführt werden.

function summeBerechnen(array $array) {
	$summe = 0;
	foreach($array as $value) {
		$summe += $value;
	}
	return $summe;
}

echo summeBerechnen([1,2,3,4,5]);

?>