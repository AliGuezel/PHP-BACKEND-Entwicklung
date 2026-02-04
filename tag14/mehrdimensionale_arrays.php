<?php 

/*
Schulstundenplan:

Montag		Dienstag 		Mittwoch
--------------------------------------
Chemie		Deutsch			Politik  
Physik		Mathe			Erdkunde
Kunst		Biologie		Englisch	
Sport		Musik			Geschichte

*/
$stdplan = [
	['Chemie', 'Physik', 'Kunst', 'Sport'],
	['Deutsch', 'Mathe', 'Biologie', 'Musik'],
	['Politik', 'Erdkunde', 'Englisch', 'Geschichte'],
];

// Musik 
echo $stdplan[1][3];
echo '<hr>';

for($x=0; $x<count($stdplan); $x++) {
	for($y=0; $y<count($stdplan[$x]); $y++) {
		echo $stdplan[$x][$y] . ' ';
	}
}
echo '<hr>';

foreach($stdplan as $tag) {
	foreach($tag as $stunde) {
		echo $stunde . ' ';
	}
}
echo '<hr>';

$stdplan2 = [
	'Montag'	=> ['Chemie', 'Physik', 'Kunst', 'Sport'],
	'Dienstag'	=> ['Deutsch', 'Mathe', 'Biologie', 'Musik'],
	'Mittwoch'	=> ['Politik', 'Erdkunde', 'Englisch', 'Geschichte'],
];

// Biologie
echo $stdplan2['Dienstag'][2];
echo '<hr>';


$kunde = [
	[
		'Vorname'	=> 'Max',
		'Nachname'	=> 'Mustermann',
		'Ort'		=> 'Musterhausen',
	],
	[
		'Vorname'	=> 'Maria',
		'Nachname'	=> 'Schmidt',
		'Ort'		=> 'Berlin',
		'Hobbies'	=> ['Sport', 'Kochen', 'Musik'],
	],
	[
		'Vorname'	=> 'Peter',
		'Nachname'	=> 'Meier',
		'Ort'		=> 'Hamburg',
	],
];

// Berlin
echo $kunde[1]['Ort'];
echo '<hr>';
// Musik 
echo $kunde[1]['Hobbies'][2];



?>