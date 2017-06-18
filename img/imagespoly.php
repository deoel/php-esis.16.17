<?php
    header('content-type: image/png');
    $img1=imagecreate(800,500);
    $jaune= imagecolorallocate($img1, 0, 255, 200);//prior to first color
    $noir= imagecolorallocate($img1, 0, 0, 0);
    $point=array(50,30,220,50,250,250);
    $nb_point=3;
    imagesetthickness($img1,3);
    imagepolygon($img1,$point,$nb_point,$noir);
    imagepng($img1);
?>