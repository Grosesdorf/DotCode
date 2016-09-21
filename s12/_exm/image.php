<?php
	header("Content-Type: image/png");
	$img = imagecreate(200, 100);
	$bgColor = imagecolorallocate($img, 0, 0, 0);
	$txtColor = imagecolorallocate($img, 255, 255, 255);
	imagestring($img, 12, 50, 50, "STRING", $txtColor);

	imagepng($img);
	imagedestroy($img);
?>