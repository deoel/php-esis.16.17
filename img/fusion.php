<?php
    header('content-type: image/jpeg');
    $img=imagecreatefromjpeg("prixforum.jpg");
    $logo=imagecreatefrompng("logo.png");
    $xi=imagesx($img);
    $yi=imagesy($img);
    $xl=imagesx($logo);
    $yl=imagesy($logo);
    $x=$xi-$xl;
    $y=$yi-$yl;
    imagecopymerge($img,$logo,$xi,$yi,$xl,$yl,$x,$y,2);
    imagejpeg($img);
?>