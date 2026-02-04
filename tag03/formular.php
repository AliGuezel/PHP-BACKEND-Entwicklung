<?php 

echo '<pre>';
print_r($_POST);
echo '</pre>';
?>

<form action="formular.php" method="post">
<input type="text" name="vorname" placeholder="Vorname"><br>
<input type="text" name="nachname" placeholder="Nachname"><br>
<input type="submit" name="senden" value="Abschicken">
</form>
<?php 
if(isset($_POST["senden"])) {
	echo $_POST["vorname"];
}



?>
