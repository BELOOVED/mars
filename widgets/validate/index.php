<?php
header('Content-type: image/png');
date_default_timezone_set('America/Aruba');
$img = imagecreatefrompng('image.png');
imagealphablending($img, false);
imagesavealpha($img, true);
$transparent = imagecolorallocatealpha($img, 255, 255, 255, 127);
$black = imagecolorallocate($img, 0, 0, 0);

imagettftext($img, 14, 0, 8, 214, $black, "font2.ttf", date('d/m/Y H:i:s'));
imagepng($img);
