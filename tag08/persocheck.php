<form action="persocheck.php" method="post">
<input type="text" name="snpz" value="2406055684" size="10" maxlength="10">D&lt;&lt;
<input type="text" name="gdpz" value="6810203" size="7" maxlength="7">&lt;
<input type="text" name="adpz" value="0705109" size="7" maxlength="7">&lt;&lt;&lt;&lt;&lt;&lt;&lt;
<input type="text" name="gespz" value="6" size="1" maxlength="1">
<input type="submit" name="senden" value="Check">
</form>
<?php 

// 3. Aufgabe: Über ein Formular soll es möglich sein eine Ausweisnummer einzugeben.
// Wird das Formular abgeschickt, soll angezeigt werden, ob die die Ausweisnummer korrekt
// oder falsch eingegeben wurde.

//$perso = "2406055684D<<6810203<0705109<<<<<<<6";
function pruefziffer($nummer) {
	$summe = 0;
	$gew = [7,3,1];
	for($i=0; $i<strlen($nummer); $i++) {
		$summe += $nummer[$i] * $gew[$i%3];
	}
	return $summe%10;
}

if(isset($_POST["senden"])) {
	$snpz  = $_POST["snpz"];
	$gdpz  = $_POST["gdpz"];
	$adpz  = $_POST["adpz"];
	$gespz = $_POST["gespz"];
	// ! Negation = Umkehrung der Logik
	if(!ctype_digit($snpz.$gdpz.$adpz.$gespz)) {
		echo "Nur Ziffern für die Eingaben sind erlaubt";
	} elseif(strlen($snpz) != 10 || strlen($gdpz) != 7 || strlen($adpz) != 7 || strlen($gespz) != 1) {
		echo "Die Anzahl der eingegeben Ziffern ist fehlerhaft";
	} else {
		$perso = "{$snpz}D<<$gdpz<$adpz<<<<<<<$gespz";	
		$sn = substr($perso,0,9);
		$gd = substr($perso,13,6);
		$ad = substr($perso,21,6);
		$psn = pruefziffer($sn);
		$pgd = pruefziffer($gd);
		$pad = pruefziffer($ad);
		$ges = $sn.$psn.$gd.$pgd.$ad.$pad;
		$pges = pruefziffer($ges);
		if($perso[9] == $psn && $perso[19] == $pgd && $perso[27] == $pad && $perso[35] == $pges) {
			echo "Ausweisnummer korrekt eingegeben";
		} else {
			echo "Ausweisnummer ist falsch";	
		}
	}
}
?>
