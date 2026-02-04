<?php 
// Aufgabe:
// Über ein Formular soll es möglich sein eine beliebige Zeichenkette einzugeben.
// Wird das Formular abgeschickt, soll der eingegebene Text genau 8 mal untereinander wiederholt 
// angezeigt werden.
?>
<form action="formular_uebung2.php" method="post">
<textarea name="text" cols="20" rows="5"></textarea><br>
<input type="submit" name="senden" value="8 mal anzeigen">
</form>
<?php 
if(isset($_POST["senden"])) {
	$text = trim($_POST["text"]);
	for($i=0; $i<8; $i++) {
		echo $text . '<br>';
	}
}

?>


