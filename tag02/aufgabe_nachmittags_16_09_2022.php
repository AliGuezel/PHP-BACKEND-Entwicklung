<?php 
// Aufgabe 1:
// Erzeugen Sie mit Hilfe der for-Schleife folgende Zahlenreihen:
// a) 100 90 80 70 60 50 40 30 20 10
for($i=100; $i>=10; $i-=10) {
	echo $i . ' ';
}
echo '<hr>';
// b) 5 10 15 20 25 30 35 40 45 50
for($i=5; $i<=50; $i+=5) {
	echo $i . ' ';
}
echo '<hr>';
// c) 1 10 100 1000 10000 100000 1000000 
for($i=1; $i<=1000000; $i*=10) {
	echo $i . ' ';
}
echo '<hr>';
// Optionale Aufgabe: (Schwieriger)
// d) 8 4 2 1 8 4 2 1 8 4 2 1 8 4 2 1 8 4 2 1
for($j=0; $j<5; $j++) {
	for($i=8; $i>=1; $i/=2) {
		echo $i . ' ';
	}
}
echo '<hr>';
// Aufgabe 2:
// Legen Sie eine Variable mit dem Namen $vorname an und 
// legen einen beliebigen Vornamen in die Variable. Prüfen 
// Sie, ob der Vorname länger ist als 5 Zeichen. 
// Falls ja, soll die Meldung "Vorname ist länger als 5 Zeichen" 
// angezeigt werden, ansonsten die Meldung "Vorname ist 
// nicht länger als 5 Zeichen".
$vorname = 'Tom';
if(strlen($vorname) > 5) {
	echo "Vorname ist länger als 5 Zeichen";
} else {
	echo "Vorname ist nicht länger als 5 Zeichen";
}
echo '<hr>';
// Aufgabe 3:
// Erstellen Sie mit Hilfe der Grafikfunktionen einen Smiley.