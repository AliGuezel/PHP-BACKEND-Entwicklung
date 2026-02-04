<?php 
// Aufgabe:
// Über ein Formular soll es möglich sein eine PLZ und einen Ort einzugeben.
// Wird das Formular abgeschickt, soll eine Meldung folgender Art angezeigt werden:
// Die PLZ XXXXX gehört zu YYYYYYYYY.
?>
<form action="formular_uebung.php" method="post">
<input type="text" name="plz" placeholder="PLZ"><br>
<input type="text" name="ort" placeholder="Ort"><br>
<input type="submit" name="senden" value="Anzeigen">
</form>
<?php 
if(isset($_POST["senden"])) {
	//echo $_POST["plz"];
	//echo $_POST["ort"];
	//echo 'Die PLZ '.$_POST["plz"].' gehört zu '.$_POST["ort"].'.';
	$plz = trim($_POST["plz"]);
	$ort = trim($_POST["ort"]);
	echo "Die PLZ $plz gehört zu $ort.";	
}


?>