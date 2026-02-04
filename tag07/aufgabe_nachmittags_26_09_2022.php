<?php 
// Aufgabe 1:
// Schreiben Sie in die Datei "testdatei.txt" 100 mal die Zeichenkette "TEST" hinein.
// Nutzen Sie dafür die Ihnen bekannten Dateifunktionen.

$str = '';
for($i=0; $i<100; $i++) {
	$str .= 'TEST '; 
}
$handle = fopen("testdatei.txt","w");
fwrite($handle,$str);
fclose($handle);

// Aufgabe 2: 
// Legen Sie ein Array mit den Wochentagen von Montag bis Sonntag an. 
// Geben Sie anschließend alle Wochentage, außer den Mittwoch, aus.

$wochentag = ['Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag'];
foreach($wochentag as $value) {
	if($value != 'Mittwoch') {
		echo $value . ' ';
	} 
}
echo '<hr>';
// Aufgabe 3:
// Vor 12:00 Uhr soll "Guten Morgen" ausgegeben werden.
// Ab 12:00 Uhr soll "Guten Tag" angezeigt werden.
if(date('G') < 12) {
	echo "Guten Morgen";
} else {
	echo "Guten Tag";
}

// Optionale Aufgabe 4 (Aufwendig und schwerer - nur für die Fortgeschrittenen!)
// Sie haben für diese Aufgabe ggfs. mehrere Tage Zeit.

// Programmieren Sie einen Jahreskalender (Mit PHP + HTML + CSS)
// Der Jahreskalender soll ähnlich aussehen wie dieser hier: 
// https://www.kalenderpedia.de/download/kalender-2022-querformat-in-farbe.pdf
// - Zeigen Sie die Wochentage abgekürzt an
// - Markieren Sie die Samstage und Sonntage
// Mögliche Erweiterung:
// - Zeigen Sie alle bundeseinheitlichen Feiertage an (Tipp: Funktion: easter_date())
?>