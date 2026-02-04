<?php 
mysqli_report(MYSQLI_REPORT_OFF);
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'phpkurs';
$link = @mysqli_connect($host, $user, $password, $database); 
if(mysqli_connect_errno()) {
	die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error()); 
}

if(isset($_POST["senden"])) {
	$vorname  = trim(strip_tags(mysqli_real_escape_string($link,$_POST["vorname"])));
	$nachname = trim(strip_tags(mysqli_real_escape_string($link,$_POST["nachname"])));
	$telefon  = trim(strip_tags(mysqli_real_escape_string($link,$_POST["telefon"])));
	$id = (int)$_POST["id"];
	if($id > 0) {
		$query = "UPDATE telefonbuch SET vorname='$vorname', nachname='$nachname', telefon='$telefon' WHERE id=$id";
		mysqli_query($link,$query);
	}
}

$query  = "SELECT * FROM telefonbuch ORDER BY nachname, vorname";
$result = mysqli_query($link, $query);
echo '<table border="1">';
while($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>'.$row['nachname'].'</td>';
	echo '<td>'.$row['vorname'].'</td>';
	echo '<td>'.$row['telefon'].'</td>';
	echo '<td><a href="telefonbuchadmin.php?edit='.$row['id'].'">Editieren</a></td>';
}
echo '</table><br>';

if(isset($_GET['edit'])) {
	$id = (int)$_GET['edit'];
	if($id > 0) {
		$query  = "SELECT * FROM telefonbuch WHERE id=$id";
		$result = mysqli_query($link,$query);
		if($row = mysqli_fetch_assoc($result)) {
			echo   '<form action="telefonbuchadmin.php" method="post">
					<input type="text" name="vorname" placeholder="Vorname" value="'.$row['vorname'].'"><br>
					<input type="text" name="nachname" placeholder="Nachname" value="'.$row['nachname'].'"><br>
					<input type="text" name="telefon" placeholder="Telefonnummer" value="'.$row['telefon'].'"><br>
					<input type="hidden" name="id" value="'.$row['id'].'">
					<input type="submit" name="senden" value="Speichern">
					</form>';
		}
	}
}

?>