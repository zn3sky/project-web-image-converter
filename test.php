<?php
header("Content-Type: image/jpeg");

list($width, $height) = getimagesize("test.jpg");
//$newWidth = 100;
//$newHeight = 100;
$newWidth = $width * 0.1;
$newHeight = $height * 0.1;

$imageDst = imagecreatetruecolor($newWidth, $newHeight);
$imageSrc = imagecreatefromjpeg("test.jpg");
imagecopyresampled($imageDst, $imageSrc, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

// 出力
imagejpeg($imageDst, null, 100);
?>