<?php 
// Aufgabe 1:
// Über ein Formular soll es möglich sein ein Passwort einzugeben.
// Lautet das eingebene Passwort "geheim", soll die Meldung "Passwort richtig",
// ansonsten die Meldung "Passwort falsch" angezeigt werden.
?>
<form action="aufgabe_nachmittags_21_09_2022.php" method="post">
<input type="password" name="passwort" placeholder="Passwort">
<input type="submit" name="senden" value="Check">
</form>
<?php 
if(isset($_POST["senden"])) {
	$passwort = $_POST["passwort"];
	if($passwort == "geheim") {
		echo "Passwort richtig";
	} else {
		echo "Passwort falsch";
	}
}
echo '<hr>';
// Aufgabe 2: 
// Schreiben Sie ein Formular um eine beliebige Zeichenkette und
// einen Zahlenwert einzugeben. Abhängig vom eingegebenen Zahlenwert, soll die 
// Zeichenkette so häufig untereinander wiederholt werden.
?>
<form action="aufgabe_nachmittags_21_09_2022.php" method="post">
<textarea cols="20" rows="5" name="text"></textarea><br>
<input type="number" name="anzahl" size="30" placeholder="Anzahl Wiederholungen"><br>
<input type="submit" name="senden2" value="Anzeigen">
</form>
<?php 
if(isset($_POST["senden2"])) {
	$text   = trim($_POST["text"]);
	// (int) ist der Cast-Operator. Stellt sicher, dass in der Variable $anzahl 
	// ein Integer-Wert gespeichert wird
	$anzahl = (int)$_POST["anzahl"];
	for($i=0; $i<$anzahl; $i++) {
		echo $text . '<br>';
	}
}
echo '<hr>';
// Aufgabe 3a: 
// Legen Sie ein Array an mit sieben Obstsorten. Mischen Sie das Array zufällig durch. 
// Geben Sie alle sieben Obstsorten untereinander aus.  
// Nutzen Sie dafür die foreach-Schleife.
$obst_arr = ['Apfel', 'Birne', 'Orange', 'Zitrone', 'Melone', 'Erdbeere', 'Banane'];
shuffle($obst_arr);
foreach($obst_arr as $value) {
	echo $value . '<br>';
}
// Aufgabe 3b (Optional):
// Prüfen Sie, ob in dem Array eine "Birne" enthalten ist und geben eine passende Meldung aus.
$treffer = false;
foreach($obst_arr as $value) {
	if($value == 'Birne') {
		$treffer = true;
		// break beendet vorzeitig die Schleife
		break;
	} 
}
if($treffer) {
	echo 'Birne ist enthalten<br>';
} else {
	echo 'Birne ist nicht enthalten<br>';
}
echo '<hr>';
if(in_array('Birne',$obst_arr)) {
	echo 'Birne ist enthalten<br>';
} else {
	echo 'Birne ist nicht enthalten<br>';
}
echo '<hr>';
// Aufgabe 4: (Optional, schwieriger)
// Über eine Schleife sollen 10.000 Zufallszahlen im Bereich von 1 - 6 gezogen werden. 
// Geben Sie anschließend aus, wie oft jede Zahl (1-6) gezogen wurde.
$zahlen = [1 => 0,0,0,0,0,0];
for($i=1; $i<10000; $i++) {
	$zufall = mt_rand(1,6);
	$zahlen[$zufall]++;
}
foreach($zahlen as $key => $value) {
	echo $key . ': ' . $value . '<br>';
}
?>
<hr>
<?php
$pool = [];   
for($i=0;$i<100;$i++){
    array_push($pool, rand(1, 6));
}
$pool_sort = (array_count_values($pool));
ksort($pool_sort);
foreach($pool_sort as $key => $value) {
	echo $key . ': ' . $value . '<br>';
}
?>