<?php 

// Aufgabe:
// Über ein Formular soll es möglich sein eine beliebige Zeichenkette
// einzugeben. Nach dem Abschicken des Formulars soll die Zeichenkette 
// in die Datei "daten.txt" gespeichert werden. Die Zeichenkette soll 
// angehängt werden!
?>
<form action="datei_uebung1.php" method="post">
<textarea cols="20" rows="5" name="text"></textarea><br>
<input type="submit" name="senden" value="Speichern">
</form>
<?php 
if(isset($_POST["senden"])) {
	$text = trim($_POST["text"]);
	$handle = fopen('daten.txt','a');
	// \n Zeilenumbruch 
	// \t Tabulator
	fwrite($handle,$text."\n");
	fclose($handle);
}


?>