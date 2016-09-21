<?php
	header("Content-Type: image/png");
	$img = imagecreate(200, 100);
	$bgColor = imagecolorallocate($img, 0, 0, 0);
	$txtColor = imagecolorallocate($img, 255, 255, 255);
	imagestring($img, 12, 50, 50, "...PNG...", $txtColor);

	imagepng($img, "1a.png", 9);
	imagepng($img, null, 9);
	imagedestroy($img);
?>