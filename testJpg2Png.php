<?php
$image = imagecreatefromjpeg("test.jpg");

header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);

?>