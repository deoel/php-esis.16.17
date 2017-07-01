<?php
    header('content-type: image/png');
    $img1=imagecreate(400,300);
    $orange= imagecolorallocate($img1, 200, 20, 50);
    imagepng($img1,"img/logo.png");
    imagepng($img1);
    $img1=imagecreatefromjpeg("");
    $orange= imagecolorallocate($img1, 200, 20, 50);
    imagepng($img1,"img/logo.png");
    imagepng($img1);

?>

