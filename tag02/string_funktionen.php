<?php 

// strrev — Kehrt einen String um
echo strrev("Hallo Welt");
echo '<hr>';
// strtoupper — Wandelt alle Zeichen eines Strings in Großbuchstaben um
echo strtoupper("Hallo Welt");
echo '<hr>';
// strpos — Sucht die Position des ersten Vorkommens des Suchstrings in einem String 
echo strpos("Hallo Welt", "Welt");
echo '<hr>';

// "HALLO WELT" => "hallo welt"
// strtolower — Setzt einen String in Kleinbuchstaben um
echo strtolower("HALLO WELT");
echo '<hr>';

// "hallo welt"	=> "Hallo Welt"
//ucwords — Wandelt jeden ersten Buchstaben eines Wortes innerhalb eines Strings ineinen Großbuchstaben um 
echo ucwords("hallo welt");
echo '<hr>';

// trim — Entfernt Whitespaces (oder andere Zeichen) am Anfang und Ende eines Strings
echo '#' . trim(" Leerzeichen am Anfang und Ende entfernen ") . '#'; 
echo '<hr>';

// strip_tags — Entfernt HTML- und PHP-Tags aus einem String
echo "<b><i>Fettdruck und unterstrichen</i></b>";
echo '<hr>';
echo strip_tags("<b><i>Fettdruck und unterstrichen</i></b>");
echo '<hr>';

// strlen — Ermitteln der String-Länge
echo strlen("Hallo Welt");
?>