<?php 

// Tabelle: telefonbuch (in DB phpkurs)
// ------------------------
// id INT PRIMARY KEY auto_increment
// nachname VARCHAR(50)
// vorname VARCHAR(50)
// telefon VARCHAR(50) 

/*
Aufgabe 1:
Über ein Formular soll es möglich sein einen neuen Datensatz in die Tabelle 
telefonbuch einzutragen. 
*/

?>
<form action="telefonbuch.php" method="post">
<input type="text" name="vorname" placeholder="Vorname"><br>
<input type="text" name="nachname" placeholder="Nachname"><br>
<input type="text" name="telefon" placeholder="Telefonnummer"><br>
<input type="submit" name="senden" value="Eintragen">
</form>
<?php 
if(isset($_POST["senden"])) {	
	mysqli_report(MYSQLI_REPORT_OFF);
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'phpkurs';
	$link = @mysqli_connect($host, $user, $password, $database); 
	if(mysqli_connect_errno()) {
		die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error()); 
	}
	$vorname  = trim(strip_tags(mysqli_real_escape_string($link,$_POST["vorname"])));
	$nachname = trim(strip_tags(mysqli_real_escape_string($link,$_POST["nachname"])));
	$telefon  = trim(strip_tags(mysqli_real_escape_string($link,$_POST["telefon"])));
	
	if($vorname && $nachname && $telefon) {
		$query = "INSERT INTO telefonbuch VALUES (NULL, '$nachname', '$vorname', '$telefon')";
		//$query = "INSERT INTO telefonbuch (vorname,nachname,telefon) VALUES ('$vorname', '$nachname','$telefon')";
		mysqli_query($link,$query);
		if(mysqli_errno($link) == 1062) {
			echo "Eintrag ist bereits im Telefonbuch vorhanden";
		} else {
			echo "Neuer Eintrag erfolgreich gespeichert";	
		}
	} else {
		echo "Alle Eingabefelder müssen ausgefüllt werden";
	}
	
}
// Aufgabe 2:
// Über ein weiteres Formular soll es möglich sein, nach einem Namen zu suchen um die Telefonnummer zu erfahren.
?>
<form action="telefonbuch.php" method="get">
<input type="text" name="v" placeholder="Vorname"><br>
<input type="text" name="n" placeholder="Nachname"><br>
<input type="submit" value="Suchen"><br>
</form>
<?php 
if(isset($_GET['v'],$_GET['n'])) {
	mysqli_report(MYSQLI_REPORT_OFF);
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'phpkurs';
	$link = @mysqli_connect($host, $user, $password, $database); 
	if(mysqli_connect_errno()) {
		die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error()); 
	}
	$vorname  = trim(mysqli_real_escape_string($link,$_GET['v']));
	$nachname = trim(mysqli_real_escape_string($link,$_GET['n']));
	
	if($vorname || $nachname) {
		$query = "SELECT * FROM telefonbuch WHERE vorname LIKE '%$vorname%' AND nachname LIKE '%$nachname%'";
		$result = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($result)) {
			echo $row['vorname'] . ' ' . $row['nachname'] . ' ' . $row['telefon'] . '<br>';
		}
		if(!mysqli_num_rows($result)) {
			echo "Keine Datensätze gefunden";
		} else {
			echo '<br>';
			echo mysqli_num_rows($result) . ' Treffer<br>';	
		}
		
	} else {
		echo "Mindestens ein Suchfeld muss ausgefüllt werden";	
	}
}





?>

