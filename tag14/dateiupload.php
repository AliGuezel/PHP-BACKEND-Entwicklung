<?php 
echo '<pre>';
print_r($_FILES);
echo '</pre>';

?>
<form action="dateiupload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="datei">
	<input type="submit" name="senden" value="Hochladen">
</form>
<?php 

if(isset($_FILES['datei']['error']) && $_FILES['datei']['error'] == 0) {
	$name 		= $_FILES['datei']['name'];
	$tmp_name 	= $_FILES['datei']['tmp_name'];
	$type  		= mime_content_type($tmp_name);
	$size		= $_FILES['datei']['size'];
	
	// Aufgabe:
	// Nur Bilder vom Typ JPEG oder PNG mit einer maximalen Größe von 800 KB (1024*800) sollen in den 
	// Order upload verschoben werden. Geben Sie passende Meldungen aus.
	
	if($type != 'image/png' && $type != 'image/jpeg') {
		echo 'Nur Bilder vom Typ JPEG oder PNG sind zugelassen';
	} elseif($size > 1024*800) {
		echo 'Das Bild darf max. eine Größe von 800 KB besitzen';
	} else {
		move_uploaded_file($tmp_name, 'upload/'.uniqid().'_'.$name);
		echo 'Bild erfolgreich hochgeladen';
	}
}


