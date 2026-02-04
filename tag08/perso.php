<?php 

$perso = "2406055684D<<6810203<0705109<<<<<<<6";
// Zugriff auf das dritte Zeichen der Zeichenkette
// echo $perso[2];

// 1. Aufgabe: Berechnen Sie die 1. Prüfziffer (PSN)
/*
$summe = 0;
$summe += ($perso[0] * 7) % 10;
$summe += ($perso[1] * 3) % 10;
$summe += ($perso[2] * 1) % 10;
$summe += ($perso[3] * 7) % 10;
$summe += ($perso[4] * 3) % 10;
$summe += ($perso[5] * 1) % 10;
$summe += ($perso[6] * 7) % 10;
$summe += ($perso[7] * 3) % 10;
$summe += ($perso[8] * 1) % 10;
echo $psn = $summe%10;
*/
/*
$summe = 0;
$gew = [7,3,1,7,3,1,7,3,1];
$summe += ($perso[0] * $gew[0]) % 10;
$summe += ($perso[1] * $gew[1]) % 10;
$summe += ($perso[2] * $gew[2]) % 10;
$summe += ($perso[3] * $gew[3]) % 10;
$summe += ($perso[4] * $gew[4]) % 10;
$summe += ($perso[5] * $gew[5]) % 10;
$summe += ($perso[6] * $gew[6]) % 10;
$summe += ($perso[7] * $gew[7]) % 10;
$summe += ($perso[8] * $gew[8]) % 10;
echo $psn = $summe%10;
*/
/*
$summe = 0;
$gew = [7,3,1,7,3,1,7,3,1];
for($i=0; $i<9; $i++) {
	$summe += ($perso[$i] * $gew[$i]) % 10;
}
echo $psn = $summe%10;
*/
/*
$summe = 0;
$gew = [7,3,1];
for($i=0; $i<9; $i++) {
	$summe += $perso[$i] * $gew[$i%3];
}
echo $psn = $summe%10;

// 2. Aufgabe: Berechnen Sie die 2. Prüfziffer (PGD) und die 3. Prüfziffer (PAD)

$summe = 0;
for($i=13; $i<19; $i++) {
	$summe += $perso[$i] * $gew[($i-13)%3];
}
echo $pgd = $summe%10;

$summe = 0;
for($i=21; $i<27; $i++) {
	$summe += $perso[$i] * $gew[($i-21)%3];
}
echo $pad = $summe%10;
*/
$perso = "2406055684D<<6810203<0705109<<<<<<<6";
function pruefziffer($nummer) {
	$summe = 0;
	$gew = [7,3,1];
	for($i=0; $i<strlen($nummer); $i++) {
		$summe += $nummer[$i] * $gew[$i%3];
	}
	return $summe%10;
}
$sn = substr($perso,0,9);
$gd = substr($perso,13,6);
$ad = substr($perso,21,6);
echo $psn = pruefziffer($sn);
echo $pgd = pruefziffer($gd);
echo $pad = pruefziffer($ad);
$ges = $sn.$psn.$gd.$pgd.$ad.$pad;
echo $pges = pruefziffer($ges);
// 3. Aufgabe: Über ein Formular soll es möglich sein eine Ausweisnummer einzugeben.
// Wird das Formular abgeschickt, soll angezeigt werden, ob die die Ausweisnummer korrekt
// oder falsch eingegeben wurde.

// Siehe Datei persocheck.php