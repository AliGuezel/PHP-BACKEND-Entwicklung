<?php 
// Zählschleife (for)
/*
Aktualisierungsparameter:
$i++ 	Der Inhalt der Variablen $i wird um 1 erhöht 
$i--	Der Inhalt der Variablen $i wird um 1 erniedrigt
$i+=4	Der Inhalt der Variablen $i wird um 4 erhöht
$i-=3	Der Inhalt der Variablen $i wird um 3 erniedrigt
$i*=2	Der Inhalt der Variablen $i wird verdoppelt 
$i/=2	Der Inhalt der Variablen $i wird halbiert
*/
// Initialisierung ; Bedingung ; Aktualisierung
for($i=1 ; $i<=3 ; $i++) {
	// Anweisungsblock
	echo 'Hallo Welt ';
}
echo '<hr>';
echo $i;
echo '<hr>';

// 2 4 6 8 10 12 14 16 18 20 22 24
for($i=2 ; $i<=24 ; $i+=2) {
	echo $i . ' ';
}
echo '<hr>';

// 120 115 110 105 100 95 90 85 80 75 70
for($i=120 ; $i>=70 ; $i-=5) {
	echo $i . ' ';
}
echo '<hr>';

// 2 4 8 16 32 64 128 256 512 1024 2048 4096
for($i=2; $i<=4096; $i*=2) {
	echo $i . ' ';
}
echo '<hr>';

// 3 6 9 12 15 18 21 24 27 30 33
for($i=3; $i<=33; $i+=3) {
	echo $i . ' ';
}
echo '<hr>';

// Aufgabe: Geben Sie den Satz "Ich wiederhole mich." genau 15 mal untereinander aus
for($i=0; $i<15; $i++) {
	echo "Ich wiederhole mich.<br>";
}
?>