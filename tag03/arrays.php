<?php 

// Array (Reihe von Elementen)
// Numerisches Array
$vorname = ['Peter', 'Anja', 'Stefan', 'Maria', 'Markus'];
// Markus
echo $vorname[4];
echo '<hr>';

for($i=0; $i<5; $i++) {
	echo $vorname[$i] . '<br>';
}
echo '<hr>';

// Aufgabe: Legen Sie ein Array an mit 7 verschiedenen Ländernamen
// Geben Sie alle Ländernamen untereinander wieder aus 

$land_arr = ['Italien', 'Portugal', 'Schweden', 'Niederlande', 'Frankreich', 'Deutschland', 'Dänemark'];
for($i=0; $i<7; $i++) {
	echo $land_arr[$i] . '<br>';
}
echo '<hr>';

// Assoziatives Array 
$hauptstadt_arr = [
//	Schlüssel		=> Wert
	'Deutschland'	=> 'Berlin',
	'Italien'		=> 'Rom',
	'Schweiz'		=> 'Bern',	
];
// Rom 
echo $hauptstadt_arr['Italien'];
echo '<hr>';

foreach($hauptstadt_arr as $land => $stadt) {
	echo "Die Hauptstadt von $land lautet $stadt.<br>";
}
echo '<hr>';
foreach($hauptstadt_arr as $key => $value) {
	echo "Die Hauptstadt von $key lautet $value.<br>";
}
echo '<hr>';
foreach($hauptstadt_arr as $value) {
	echo $value . '<br>';
}
echo '<hr>';
// Aufgabe:
// Legen Sie ein numerisches Array an mit 5 verschiedenen Tierarten. Geben Sie 
// alle Elemente des Arrays einmal mit Hilfe der for-Schleife und nochmal mit Hilfe 
// der foreach-Schleife untereinander aus. 

$tier_arr = ['Hund', 'Katze', 'Maus', 'Elefant', 'Tiger'];
for($i=0; $i<count($tier_arr); $i++) {
	echo $tier_arr[$i] . '<br>'; 
}
echo '<hr>';
foreach($tier_arr as $value) {
	echo $value . '<br>';
}
echo '<hr>';

?>