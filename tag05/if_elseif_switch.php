<?php 

$vorname = 'Maria';

if($vorname == 'Maria') {
	echo 'Hey Maria';
} elseif($vorname == 'Stefan') {
	echo 'Hallo Stefan';
} elseif($vorname == 'Petra') {
	echo 'Hi Petra';
} elseif($vorname == 'Markus') {
	echo 'Guten Tag Markus';
} else {
	echo 'Hallo Unbekannte/r';	
}
echo '<hr>';
switch($vorname) {
	case 'Maria':
		echo 'Hey Maria';
		break;
	case 'Stefan':
		echo 'Hallo Stefan';
		break;
	case 'Petra':
		echo 'Hi Petra';
		break;
	case 'Markus':
		echo 'Guten Tag Markus';
		break;
	default:
		echo 'Hallo Unbekannte/r';		
}


