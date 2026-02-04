<?php 

$im = imagecreate(800,600);
// 1. Aufruf der Funktion imagecolorallocate setzt die Hintergrundfarbe
imagecolorallocate($im, 220, 220, 220);
// Weitere Farben definieren
$black = imagecolorallocate($im, 0, 0, 0);
$red = imagecolorallocate($im, 255, 0, 0); 
// Linienbreite festlegen
imagesetthickness($im, 3);
// Linie zeichnen
imageline($im, 0, 0, 800, 600, $black);

imagesetthickness($im, 1);
// Kreis/Ellipse/Bogen zeichen
imagearc($im, 400, 300, 150, 150, 0, 0, $black);
// Fläche füllen
imagefill($im, 410, 300, $red);
// Bild ans PNG-Datei speichern
imagepng($im, 'bild.png');
?>
<img src="bild.png">