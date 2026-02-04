<?php 

// UND-Verknüpfung (&& oder AND)
// Beide Teilbedingungen wahr -> Insgesamt wahr 

// ODER-Verknüpfung (|| oder OR)
// Mindestens eine Teilbedingung wahr -> Insgesamt wahr

$ampel1 = 'gelb';
$ampel2 = 'rot';

if($ampel1 != 'gelb' || $ampel2 != 'gelb' ) {
	echo 'wahr +';	
} else {
	echo 'unwahr -';
}



?>