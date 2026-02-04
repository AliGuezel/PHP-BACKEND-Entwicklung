<?php 

// Aufgabe: Schreiben Sie eine Funktion mit dem Namen multiplizieren().
// Die Funktion soll zwei zu übergebende Zahlenwerte multiplizieren und 
// das Ergebnis zurückliefern.

function multiplizieren($zahl1, $zahl2) {
	return $zahl1 * $zahl2;
}
echo multiplizieren(3,4);
echo '<hr>';

// Aufgabe:
// Schreiben Sie eine Funktion mit dem Namen "gleicherWert".
// Die Funktion soll bei zwei zu übergebenden Zahlenwerten prüfen,
// ob die Zahlenwerte gleich sind. Falls ja, soll eine 1 zurückgeliefert
// werden, ansonsten eine 0. 

function gleicherWert($zahl1, $zahl2) {
	if($zahl1 == $zahl2) {
		return 1;
	}
	return 0;
}
echo gleicherWert(3,4);
echo '<hr>';

// Aufgabe:
// Schreiben Sie eine Funktion mit dem Namen "groessterWert".
// Die Funktion soll von zwei zu übergebenden Zahlenwerten den größeren
// Wert zurückliefern.
function groessterWert($zahl1, $zahl2) {
	if($zahl1 > $zahl2) {
		return $zahl1;
	}
	return $zahl2;
}
echo groessterWert(7,5);
echo '<hr>';
// Aufgabe: 
// Schreiben Sie eine Funktion mit dem Namen "wochentag()". 
// Die Funktion soll den aktuellen Wochentag in deutscher Sprache zurückliefern.

function wochentag() {
	$wochentag = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag',
		'Freitag', 'Samstag'];
	return $wochentag[date('w')];	
}
echo wochentag();
echo '<hr>';

// Aufgabe: 
// Schreiben Sie eine Funktion mit dem Namen "sekundenBisMitternacht()". Die
// Funktion soll die aktuellen Sekunden bis Mitternacht zurückliefern. 

function sekundenBisMitternacht() {
	return mktime(24,0,0) - time();	
}
echo sekundenBisMitternacht();




