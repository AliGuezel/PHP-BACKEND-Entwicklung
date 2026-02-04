<?php 

$handle = fopen('test.txt','r');
while($zeile = fgets($handle)) {
	echo $zeile . '<br>';
}
fclose($handle);