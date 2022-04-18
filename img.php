<?php
	
	header("Content-type: image/jpeg");

	$img_path = "images/base-img.jpg";
	$font_path = realpath("font/font.ttf");

	$jpg_img = imagecreatefromjpeg($img_path);


	if(isset($_GET['user'])){
		$text = $_GET['user'];
		$font_color = imagecolorallocate($jpg_img, 255, 255, 255);

		imagettftext($jpg_img, 30, 0, 10, 60, $font_color, $font_path, $text);
	}

	imagejpeg($jpg_img);
	imagedestroy($jpg_img);

?>