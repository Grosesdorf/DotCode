<?php
	header("Content-Type: image/jpg");
	$img = imagecreate(200, 100);
	$bgColor = imagecolorallocate($img, 0, 0, 0);
	$txtColor = imagecolorallocate($img, 255, 255, 255);
	imagestring($img, 12, 50, 50, "...JPG...", $txtColor);

	imagejpeg($img, "1a.jpg", 75);
	imagejpeg($img, null, 10);
	imagedestroy($img);
?>