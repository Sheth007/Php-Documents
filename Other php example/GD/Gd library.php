<?php
header('content-Type:image/jpeg');
$canvas=imagecreate(400, 400);

$red = imagecolorallocate($canvas,255,0,0);

imagefill($canvas, 0, 0, $red);

imagejpeg($canvas);

imagedestroy($canvas);
?>