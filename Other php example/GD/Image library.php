<?php
header('content-Type:image/jpeg');

$canvas=imagecreate(400, 400);

$red = imagecolorallocate($canvas,255,0,0);   //for canvas

$black=imagecolorallocate($canvas,0,0,0);   //for fonts
imagefill($canvas, 0, 0, $red);

imagestring($canvas, 5, 10, 50, 'Copyrights Programmerblog.net', $black);

imagejpeg($canvas);
imagedestroy($canvas);
?>