<?php 

// Aktuelles Datum vom Server
echo date('d.m.Y');
echo '<hr>';

// Aktuelle Uhrzeit vom Server 11:08:53
echo date('H:i:s');
echo '<hr>';

// Aktuellen Zeitstempel, Sekunden seit dem 01.01.1970
echo time();
echo '<hr>';

// Wie viele Stunden dauert es noch bis Heiligabend 2022 um 18 Uhr?
$sekunden = mktime(18,0,0,12,24,2022) - time();
echo $stunden = ceil($sekunden/60/60);
echo '<hr>';

// Wie viele Tage lebt bereits der Erfinder von PHP?
// Rasmus Lerdorf (*22.11.1968)
$sekunden  = time() - mktime(0,0,0,11,22,1968);
echo $tage = floor($sekunden/60/60/24);
echo '<hr>';

// Wie viele Minuten dauert es noch bis heute 16:45 Uhr?
$sekunden = mktime(16,45,0) - time();
echo $minuten  = ceil($sekunden/60);
echo '<hr>';

if(checkdate(1,32,2022)) {
	echo 'Datum gültig';
} else {
	echo 'Datum ungültig';
}
echo '<hr>';

// Aufgabe: Zeigen Sie alle Schaltjahre an von 1600 bis 2200
for($jahr=1600; $jahr<=2200; $jahr++) {
	if(checkdate(2,29,$jahr)) {
		echo $jahr . ' ';
	}
}
echo '<hr>';

$wtag = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];
echo $wtag[date('w')];
echo '<hr>';

// Aufgabe: Der aktuelle Monat soll in deutscher Sprache angezeigt werden
$monat = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
	'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];
echo $monat[date('n')-1];	
echo '<hr>';


$monat2 = [1 => 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
	'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];	
echo $monat2[date('n')];	
echo '<hr>';
?>