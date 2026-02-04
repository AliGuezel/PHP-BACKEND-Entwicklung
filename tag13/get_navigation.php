<a href="get_navigation.php?page=startseite">Startseite</a>
<a href="get_navigation.php?page=kontakt">Kontakt</a>
<a href="get_navigation.php?page=impressum">Impressum</a>
<?php 
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'startseite';	
}
switch($page) {
	case 'kontakt':
		echo '<h2>Kontakt</h2>';
		break;
	case 'impressum':
		echo '<h2>Impressum</h2>';
		break;
	default:
		echo '<h2>Startseite</h2>';
}
?>

