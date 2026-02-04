<?php 

echo '<pre>';
print_r($_GET);
echo '</pre>';


// /get.php?vorname=Max&nachname=Mustermann&senden=Abschicken

// https://www.google.de/search?q=donnerstag
?>
<form action="get.php" method="get">
<input type="text" name="vorname" placeholder="Vorname">
<input type="text" name="nachname" placeholder="Nachname">
<input type="submit" name="senden" value="Abschicken">
</form>
<?php 
/*
Unterschiede zwischen POST und GET:

POST:
	- Die Daten werden für den Besucher unsichtbar übertragen
	- Unbegrenzte Datenmenge 
	- Zeichenketten und Binärdaten können übertragen werden
	- Ein Formular ist zwingend notwendig

GET:
	- Die Daten werden für den Besucher sichtbar in der URL übertragen  
	- Die Datenmenge wird durch die URL begrenzt (URL darf max 2KB=2048 Zeichen lang sein)
	- Nur Zeichenketten können übertragen werden
	- Ein Formular ist NICHT zwingend notwendig 
		-> Einsatzzweck mit Formular:  Suchformulare
		-> Einsatzzweck ohne Formular: Navigation auf einer Webseite
*/
?>
