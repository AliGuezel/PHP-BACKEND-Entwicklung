<?php 

// Aufgabe 1:
// 5 zufällige verschiedene Großbuchstaben anzeigen

$abc = range('A','Z');
shuffle($abc);
$captcha = '';
for($i=0; $i<5; $i++) {
	$captcha .= $abc[$i];  // $captcha = $captcha .$abc[$i];
}

$im = imagecreate(200,50);
imagecolorallocate($im, 220, 220, 220);
$font_arr = ['verdanab.ttf', 'arialbd.ttf', 'BAUHS93.TTF', 'BOOKOSB.TTF', 'comicbd.ttf', 'COOPBL.TTF'];
shuffle($font_arr);
for($i=0, $x=10; $i<5; $i++, $x+=35) {
	$color = imagecolorallocate($im, mt_rand(0,200), mt_rand(0,200), mt_rand(0,200));
	$size  = mt_rand(12,30);
	$angle = mt_rand(-30,30);
	imagettftext($im, $size, $angle, $x, 35, $color, 'fonts/'.$font_arr[$i], $abc[$i]);
	imageline($im, 0, mt_rand(0,49), 199, mt_rand(0,49), $color);
	imagearc($im, mt_rand(0,199), mt_rand(0,49), mt_rand(50,200), mt_rand(50,200), 0, 0, $color);
}
imagegif($im, 'captcha.gif');
?>
<img src="captcha.gif"><br>
<form action="captcha.php" method="post">
<input type="text" name="captcha" maxlength="5" size="5">
<input type="submit" name="senden" value="Check">
</form>
<br>
<?php 
if(isset($_POST["senden"])) {
	echo $_POST["captcha"];
	echo '<br>';
	echo $captcha;	
}











