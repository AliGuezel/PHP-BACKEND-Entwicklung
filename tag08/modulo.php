<?php 

// Modulo, Restwert nach einer Division 

echo 9%3; // Rest 0
echo '<hr>';

echo 8%3; // Rest 2
echo '<hr>';

echo 11%4; // Rest 3
echo '<hr>';

echo 9%2; // Rest 1
echo '<hr>';

echo 3%8; // Rest 3
echo '<hr>';

echo 12%5478; // Rest 12
echo '<hr>';

echo 0%3; // Rest 0
echo 1%3; // Rest 1
echo 2%3; // Rest 2
echo 3%3; // Rest 0
echo 4%3; // Rest 1

for($i=0; $i<20; $i++) {
	echo $i%3;
	echo ' ';
}
echo '<hr>';

$arr = ['Eins', 'Zwei', 'Drei'];
for($i=0; $i<20; $i++) {
	echo $arr[$i%3];
	echo ' ';
}
echo '<hr>';

$zahl = 135;
echo $endziffer = $zahl%10;
?>