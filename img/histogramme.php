<?php
    header('content-type: image/png');
    $largeur=400;
    $hauteur=300;
    $img1=imagecreate($largeur,$hauteur);
    $jaune= imagecolorallocate($img1, 0, 255, 200);
    $noir= imagecolorallocate($img1, 0, 0, 0);
    $visites=array(320,560,180,823,750,422,973,825,712,123,908,615);
    $x1=10;
    $y1=$hauteur-$x1;
    $x2=$largeur-$x1;
    $y2=$hauteur-$x1;
    imageline($img1,$x1,$y1,$x2,$y2,$noir);
    imageline($img1,10,10,$x1,$y1,$noir);
    $epaisseur=14;
    $visite_max=1000;
    for($mois=1;$mois<13;$mois++){
        imagestring($img1,0,30*$mois,$y1,$mois,$noir);
    }
    for($mois=1;$mois<13;$mois++){
        $hauteur_rect=round($visites[$mois-1]*$hauteur/$visite_max);
        $x1=30*$mois-7;
        $y1=$hauteur-$hauteur_rect;
        $x2=30*$mois+7;
        $y2=$hauteur-10;
        imagefilledrectangle($img1,$x1,$y1,$x2,$y2,$noir);
    }
    imagepng($img1, "graphique_visites_annuelles.png");
    imagepng($img1);
?>