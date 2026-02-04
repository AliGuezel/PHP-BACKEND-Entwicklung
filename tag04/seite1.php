<?php 
session_start();

/*
Die Funktion session_start() prüft, ob eine zugehörige Session-Datei 
auf dem Server vorhanden ist (über Cookies).

Wird keine Session-Datei gefunden, wird eine neue Session-Datei erzeugt 
und die Session-ID wird als Cookie auf dem Client-Rechner abgelegt. 
Die Session-ID wird ebenso benutzt für den Dateinamen der Session-Datei.

Alle Session-Variablen die danach angelegt werden, werden automatisch 
on der Session-Datei gespeichert. 

Wird die Session-Datei gefunden, wird der Inhalt der Datei ausgelesen 
und die Session-Variablen werden wieder erzeugt.

Eine Session hat eine Standardzeit von 24 Minuten. Wird innerhalb 
der Session-Zeit die Funktion session_start() wieder aufgerufen,
wird die Session-Zeit wieder auf 24 Minuten zurückgesetzt.
*/

$_SESSION['vorname'] = 'Thomas';
$_SESSION['alter'] = 27;

?> 
<h2>Seite 1</h2>
<a href="seite2.php">Zu Seite 2</a>
