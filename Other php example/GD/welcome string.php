<?php
header('content-Type:image/jpeg');

$canvas=imagecreate(500, 500);

$red = imagecolorallocate($canvas,255,255,255);   //for canvas

$black=imagecolorallocate($canvas,0,0,0);   //for fonts

imagestring($canvas, 100, 115, 220, 'WELCOME TO ATMIYA UNIVERSITY', $black);

imagejpeg($canvas);
imagedestroy($canvas);
?>