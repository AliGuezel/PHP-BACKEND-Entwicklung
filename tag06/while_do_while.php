<?php 

$zufall  = mt_rand(1,1000);
$zaehler = 0;
// Kopfgesteuerte Schleife
while($zufall != 500) {
	$zufall = mt_rand(1,1000);
	$zaehler++;
}
echo $zaehler; // Kleinster möglicher Wert: 0
echo '<hr>';
// -----------------------------------------------------------
$zaehler = 0;
// Fußgesteuerte Schleife
// Der Anweisungsblock der do-while-Schleife wird mindestens einmal durchlaufen
do {
	$zufall = mt_rand(1,1000);
	$zaehler++;
} while($zufall != 500);
echo $zaehler;// Kleinster möglicher Wert: 1

?>

