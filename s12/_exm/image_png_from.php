<?php
	header("Content-Type: image/png");
	$img = imagecreatefromjpeg("1.jpg");
	$txtColor = imagecolorallocate($img, 255, 0, 0);
	$shadowColor = imagecolorallocate($img, 0, 255, 0);
	$font = "./arial.ttf";
	imagettftext($img, 32, -90, 74, 44, $shadowColor, $font, "text");
	imagettftext($img, 32, -90, 70, 40, $txtColor, $font, "text");


	imagepng($img, "2a.png", 9);
	imagepng($img, null, 9);
	imagedestroy($img);
?>