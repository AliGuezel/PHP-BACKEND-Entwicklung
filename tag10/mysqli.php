<?php 

mysqli_report(MYSQLI_REPORT_OFF);

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'world';
// @ unterdrückt eine mögliche Fehlermeldung
@mysqli_connect($host, $user, $password, $database); 

if(mysqli_connect_errno()) {
	die('Datenbankfehler');
}
