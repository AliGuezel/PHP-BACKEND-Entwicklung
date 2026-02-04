<?php 
// Aufgabe 1:
// -Legen Sie ein assoziatives Array an mit folgenden Werten:
// Vorname: Thomas
// Nachname: Meier
// Geburtsdatum: 10.03.1968
// -Geben Sie anschließend alle Elemente des Arrays mit Hilfe der foreach-Schleife wieder aus.

$kunde_arr = [
	'Vorname'		=> 'Thomas',
	'Nachname'		=> 'Meier',
	'Geburtsdatum'	=> '10.03.1968',
];
foreach($kunde_arr as $key => $value) {
	echo $key . ': ' . $value . '<br>'; 
	//echo "$key: $value<br>";
}
echo '<hr>';
// Aufgabe 2:
// -Legen Sie ein Array an mit 4 Städtenamen
// -Fügen Sie zwei neue Städte dem Array hinzu 
// -Sortieren Sie das Array 
// -Geben Sie alle Elemente mit Hilfe der for-Schleife aus 
$stadt_arr = ['Berlin', 'München', 'Bremen', 'Hamburg'];
array_push($stadt_arr, 'Dresden', 'Nürnberg');
sort($stadt_arr);
for($i=0; $i<count($stadt_arr); $i++) {
	echo $stadt_arr[$i] . ' ';
}
echo '<hr>';
// Aufgabe 3: 
// Zeichnen Sie mit den PHP-Funktionen ein Bild mit der Breite 
// und Höhe von 200 Pixeln. Auf dem Bild soll ein roter gefüllter Kreis 
// angezeigt werden.
$im = imagecreate(200,200);
imagecolorallocate($im, 220, 220, 220);
$red = imagecolorallocate($im, 255, 0, 0);
imagearc($im, 100, 100, 100, 100, 0, 0, $red);
imagefill($im, 100, 100, $red);
imagejpeg($im, 'roterKreis.jpg');
?>
<img src="roterKreis.jpg">
<hr>
<?php 
// Aufgabe 4:
// Über ein Formular soll es möglich sein eine Zeichenkette einzugeben. 
// Nach dem Absenden des Formulars soll 
// a) -die Zeichenkette umgedreht angezeigt werden 
// b) -die Originalzeichenkette 10 mal untereinander angezeigt werden 
// c) -die Anzahl der Zeichen der Zeichenkette ausgegeben werden 
?>
<form action="aufgabe_nachmittags_19_09_2022.php" method="post">
<textarea name="text" cols="20" rows="5"></textarea><br>
<input type="submit" name="senden" value="Auswerten">
</form>
<?php 
if(isset($_POST["senden"])) {
	$text = $_POST["text"];
	// a)
	echo strrev($text);
	echo '<hr>';
	// b)
	for($i=0; $i<10; $i++) {
		echo $text.'<br>';
	}
	echo '<hr>';
	// c)
	echo strlen($text);
}
echo '<hr>';
	
// Aufgabe 5: (Schwieriger, Optional)
// Schreiben Sie einen Lottozahlen-Generator. Es sollen 6 verschiedene Lottozahlen im 
// Bereich von 1 - 49 angezeigt werden.
// Sortieren Sie die Lottozahlen der Größe nach aufsteigend.
$zahlen_arr = range(1,49);
shuffle($zahlen_arr);
for($i=0; $i<6; $i++) {
	$lotto_arr[] = $zahlen_arr[$i];
}
sort($lotto_arr);
foreach($lotto_arr as $value) {
	echo $value . ' ';
}
?>