<?php 
// Aufgabe 1:
// Über ein Formular soll es möglich sein einen Städtenamen einzugeben.
// Lautet die Stadt Berlin, soll die Meldung "Berlin ist die Hauptstadt" angezeigt werden.
// Lautet die Stadt Hamburg, soll die Meldung "Hamburg liegt im Norden" angezeigt werden.
// Lautet die Stadt Bremen, soll die Meldung "Hier wohnen die Bremer Stadtmusikanten" angezeigt werden.
// Für jede andere Stadt soll angezeigt werden: "Diese Stadt wurde leider noch nicht im Verzeichnis aufgenommen".
//
// Lösen Sie die Aufgabe einmal mit if/elseif und einmal mit einem switch.
?>
<form action="aufgabe_nachmittags_22_09_2022.php" method="post">
<input type="text" name="stadt" placeholder="Stadt">
<input type="submit" name="senden" value="Anzeigen">
</form>
<?php 
if(isset($_POST["senden"])) {
	$stadt = trim(strtoupper($_POST["stadt"]));
	if($stadt == "BERLIN") {
		echo "Berlin ist die Hauptstadt";
	} elseif($stadt == "HAMBURG") {
		echo "Hamburg liegt im Norden";
	} elseif($stadt == "BREMEN") {
		echo "Hier wohnen die Bremer Stadtmusikanten";
	} else {
		echo "Diese Stadt wurde leider noch nicht im Verzeichnis aufgenommen";
	}
	echo "<hr>";
	switch($stadt) {
		case "BERLIN":
			echo "Berlin ist die Hauptstadt";
			break;
		case "HAMBURG":
			echo "Hamburg liegt im Norden";
			break;
		case "BREMEN":
			echo "Hier wohnen die Bremer Stadtmusikanten";
			break;
		default:
			echo "Diese Stadt wurde leider noch nicht im Verzeichnis aufgenommen";
	}
}
echo '<hr>';
// Aufgabe 2:
// Wie viele Minuten dauert es noch bis heute 22:00 Uhr?
// Das Skript soll jeden Tag funktionieren.
$sekunden = mktime(22,0,0) - time();
echo $minuten  = ceil($sekunden/60);
echo '<hr>';

// Aufgabe 3:
// Geben Sie den Wochentag von gestern in deutscher Sprache aus. 
// Das Skript soll jeden Tag funktionieren.
$wtag = ['Samstag', 'Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];
echo $wtag[date('w')];
echo '<hr>';

$wtag = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];
echo $wtag[date('w', time()-(60*60*24))];
echo '<hr>';

// Aufgabe 4: 
// Erzeugen Sie mit Hilfe von date() folgenden Satz (mit den aktuellen Daten):
// Heute ist Donnerstag, der 22. September 2022 und es ist 14:37 Uhr
$wtag = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];
$monat = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
	'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];
	
echo 'Heute ist '.$wtag[date('w')].', der '.date('d.').' '.$monat[date('n')-1].' '.date('Y')
	.' und es ist '.date('H:i').' Uhr';	
echo '<hr>';
// Aufgabe 5:
// Über ein Formular soll es möglich sein ein Geburtsdatum einzugeben. 
// Nach dem Abschicken des Formulars soll angezeigt werden, wie viele Tage 
// die Person bereits auf der Welt ist.
// Sie dürfen bei dieser Aufgabe frei entscheiden, wie Sie das Formular aufbauen.
?>
<form action="aufgabe_nachmittags_22_09_2022.php" method="post">
<input type="text" name="tag" placeholder="TT" size="2" maxlength="2">
<input type="text" name="monat" placeholder="MM" size="2" maxlength="2">
<input type="text" name="jahr" placeholder="JJJJ" size="4" maxlength="4">
<input type="submit" name="berechnen1" value="Tage berechnen">
</form>
<?php 
if(isset($_POST["berechnen1"])) {
	$tag   = (int)$_POST["tag"];
	$monat = (int)$_POST["monat"];
	$jahr  = (int)$_POST["jahr"];
	
	if(checkdate($monat, $tag, $jahr)) {
		$sekunden = time() - mktime(0,0,0,$monat,$tag,$jahr);
		$tage = floor($sekunden/60/60/24);
		echo "Sie leben bereits $tage Tage";
	} else {
		echo 'Ungültiges Datum';	
	}
}
?>
<form action="aufgabe_nachmittags_22_09_2022.php" method="post">
<select name="tag">
<?php 	
for($i=1; $i<=31; $i++) {
	echo '<option>'.$i.'</option>';
}	
?>	
</select>
<select name="monat">
<?php 	
for($i=1; $i<=12; $i++) {
	echo '<option>'.$i.'</option>';
}	
?>	
</select>
<select name="jahr">
<?php 	
for($i=date('Y'); $i>=date('Y')-100; $i--) {
	echo '<option>'.$i.'</option>';
}	
?>	
</select>
<input type="submit" name="berechnen2" value="Tage berechnen">
</form>
<?php 
if(isset($_POST["berechnen2"])) {
	$tag   = (int)$_POST["tag"];
	$monat = (int)$_POST["monat"];
	$jahr  = (int)$_POST["jahr"];
	
	if(checkdate($monat, $tag, $jahr)) {
		$sekunden = time() - mktime(0,0,0,$monat,$tag,$jahr);
		$tage = floor($sekunden/60/60/24);
		echo "Sie leben bereits $tage Tage";
	} else {
		echo 'Ungültiges Datum';	
	}
}
?>

<form action="aufgabe_nachmittags_22_09_2022.php" method="post">
<input type="date" name="datum">
<input type="submit" name="berechnen3" value="Tage berechnen">
</form>
<?php 
if(isset($_POST["berechnen3"])) {
	// 2022-09-22 
	$datum = $_POST["datum"];
	$ts = strtotime($datum);
	$sekunden = time() - $ts;
	$tage = floor($sekunden/60/60/24);
	echo "Sie leben bereits $tage Tage";
}
?>
<form action="aufgabe_nachmittags_22_09_2022.php" method="post">
<input type="date" name="datum">
<input type="submit" name="berechnen4" value="Tage berechnen">
</form>
<?php 
if(isset($_POST["berechnen4"])) {
	// 2022-09-22 
	$datum = $_POST["datum"];
	$tag = (int)substr($datum,8,2);
	$monat = (int)substr($datum,5,2);
	$jahr = (int)substr($datum,0,4); 
	if(checkdate($monat, $tag, $jahr)) {
		$sekunden = time() - mktime(0,0,0,$monat,$tag,$jahr);
		$tage = floor($sekunden/60/60/24);
		echo "Sie leben bereits $tage Tage";
	} else {
		echo 'Ungültiges Datum';	
	}
}

?>

