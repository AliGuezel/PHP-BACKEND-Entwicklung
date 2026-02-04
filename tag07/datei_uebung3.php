<?php 

// Aufgabe:
// Über ein Formular soll es möglich sein einen Vornamen und Nachnamen einzugeben.
// Wird das Formular abgeschickt, dann soll der Vor- und Nachname in einer Datei 
// mit dem Namen "namen.txt" untereinander gespeichert werden. 

// Beispiel in der Datei:
// Hans Schmidt
// Petra Lustig 
// Max Mustermann
?>
<form action="datei_uebung3.php" method="post">
<input type="text" name="vorname" placeholder="Vorname">
<input type="text" name="nachname" placeholder="Nachname">
<input type="submit" name="senden" value="Speichern">
</form>
<?php 
if(isset($_POST["senden"])) {
	$vorname  = trim($_POST["vorname"]);
	$nachname = trim($_POST["nachname"]);
	if($vorname && $nachname) {
		$handle = fopen("namen.txt", "a");
		$save = $vorname.' '.$nachname."\n";
		fwrite($handle,$save);
		fclose($handle);
	} else {
		echo "Alle Felder müssen ausgefüllt werden!";	
	}
}


?>
