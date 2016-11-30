<?php
	header('Content-Type: image/png');
	$img = @imagecreatefrompng("img/lib.png");
	imagesavealpha($img, true);
	imagepng($img);
	imagedestroy($img);
?>