<?php 

// Zeichenketten (Strings)

$str1 = "Ich bin eine Zeichenkette";
$str2 = 'Ich bin eine Zeichenkette';
 
$str3 = '<a href="http://www.google.de">Suchmaschine</a>'; 
$str4 = "<a href='http://www.google.de'>Suchmaschine</a>"; 

// Der Backslash maskiert das nachfolgende Zeichen. Damit steht das 
// Anführungszeichen nicht mehr für das Ende der Zeichenkette.
$str5 = "Ich bin ' \" eine Zeichenkette";
$str6 = 'Ich bin \' " eine Zeichenkette';

$wort1 = 'PHP';
$wort2 = 'lerne';
$wort3 = 'Ich';
// Ich lerne PHP!
echo $wort3 . ' ' . $wort2 . ' ' . $wort1 . '!<br>';

$w1 = 'ist';
$w2 = 'Wochenende';
$w3 = 'Bald';
// Bald ist Wochenende. 

echo $w3 . ' ' . $w1 . ' ' . $w2 . '.<br>';
echo $w3 . " " . $w1 . " " . $w2 . ".<br>";
echo $w3." ".$w1." ".$w2.".<br>";
echo "$w3 $w1 $w2.<br>";

$vorname = 'Peter';
echo "Vorname: $vorname<br>"; // Vorname: Peter
echo 'Vorname: $vorname<br>'; // Vorname: $vorname








?>