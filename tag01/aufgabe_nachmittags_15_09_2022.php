<?php 
// Aufgabe 1  
// a) Legen Sie drei Variablen an mit den Wörtern "Ich", "mag" und "PHP".
//    Geben Sie mit den Variablen den Satz "Ich mag PHP." aus.
$w1 = "Ich";
$w2 = "mag";
$w3 = "PHP";

echo $w1 . ' ' . $w2 . ' ' . $w3 . '.<br>';
echo "$w1 $w2 $w3.<br>";

// b) Erstellen Sie eine Zeichenkette mit folgendem HTML-Code und geben Sie sie aus: 
//    <h1 id="test">PHP macht Spaß</h1>
echo '<h1 id="test">PHP macht Spaß</h1>';
echo "<h1 id=\"test\">PHP macht Spaß</h1>";

// c) Welche der nachfolgendenen Variablennamen sind gültig?
//   $test +, $Test +, $1 -, $test1 +, $1test -, mein_test -, $mein_test + 

// Aufgabe 2
// Legen Sie eine Variable mit dem Namen $zahl an und weisen dort einen
// beliebigen positiven Integerwert (=Ganzzahl) zu.
// Befindet sich in der Variablen ein Wert unter 50 soll die Ausgabe erscheinen:
// "Zahlenwert X ist unter Fünfzig"
// Ansonsten die Meldung:
// "Zahlenwert X ist zu groß"
// X soll bei der Ausgabe durch den Zahlenwert von $zahl ersetzt werden 

$zahl = 52;
if($zahl < 50) {
	echo "Zahlenwert $zahl ist unter Fünfzig";
} else {
	echo "Zahlenwert $zahl ist zu groß";
}
?>
