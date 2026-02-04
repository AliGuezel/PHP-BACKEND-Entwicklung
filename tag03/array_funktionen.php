<?php 

$vorname = ['Peter', 'Anja', 'Stefan', 'Maria', 'Markus'];

// shuffle — Mischt die Elemente eines Arrays
shuffle($vorname);
// sort — Sortiert ein Array in aufsteigender Reihenfolge
sort($vorname);
// array_push — Fügt ein oder mehr Elemente an das Ende eines Arrays an
array_push($vorname, 'Ute', 'Petra');
// Ein neues Element an das Ende eines Array anhängen
$vorname[] =  'Dieter';
// array_pop — Liefert und entfernt das letzte Element eines Arrays
echo array_pop($vorname);
echo '<hr>';
// count — Zählt alle Elemente eines Arrays 
echo count($vorname);
echo '<hr>';

echo '<pre>';
print_r($vorname);
echo '</pre>';

// range — Erstellt ein Array mit einem Bereich von Elementen
$zahlen_arr = range(5,15);
echo '<pre>';
print_r($zahlen_arr);
echo '</pre>';