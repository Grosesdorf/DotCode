<?php
	header("Content-Type: image/jpg");
	$img = imagecreatefromjpeg("1.jpg");
	$txtColor = imagecolorallocate($img, 255, 0, 0);
	$shadowColor = imagecolorallocate($img, 0, 255, 0);
	$font = "./arial.ttf";
	imagettftext($img, 32, -30, 74, 44, $shadowColor, $font, "text");
	imagettftext($img, 32, -30, 70, 40, $txtColor, $font, "text");


	imagejpeg($img, "2a.jpg", 75);
	imagejpeg($img, null, 90);
	imagedestroy($img);
?>