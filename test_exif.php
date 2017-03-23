<?php
$img = 'test.jpg' ;

$exif = @exif_read_data($img) ;

echo '<pre>' ;
var_dump($exif) ;
echo '</pre>' ;