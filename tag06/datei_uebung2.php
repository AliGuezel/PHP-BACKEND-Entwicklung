<?php 

// Aufgabe:
// Jedes Mal wenn das PHP-Skript aufgerufen wird, soll ein Eintrag in die Datei 
// "log.txt" erfolgen. In diese Datei soll das aktuelle Datum und die aktuelle Zeit 
// eingetragen werden. Die Einträge sollen angehängt werden.

$handle = fopen('log.txt','a');
$save = date('d.m.Y - H:i:s')."\n";
fwrite($handle,$save);
fclose($handle);

?>