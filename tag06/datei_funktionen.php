<?php 

$filename = 'datei.txt';
// Datei öffnen 
$handle = fopen($filename,'w+');
// Datei schreiben 
fwrite($handle,'Hallo Welt');
// Dateizeiger wieder auf den Anfang setzen
rewind($handle); // Alternative: fseek($handle,0);
// Datei lesen 
echo fread($handle, filesize($filename));
// Datei schließen
fclose($handle);
?>