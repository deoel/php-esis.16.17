<?php
    $a = array(
        "banane",
        "like"=>"pomme",
        12=>"citron"
    );
    $c = array();
    $c[]=45;
    $c[]="lol";
    $c[]=$a;
    $c[]=4587;
    //count Compte tous les éléments d'un tableau ou quelque chose d'un objet
    $b=count($c);
    echo'<br> Taille de c =', $b. '<br>';

    //•in_array — Indique si une valeur appartient à un tableau
    if(in_array("pomme", $c))
        echo '<br> Pomme y est !';
    else
        echo "<br> Bouffée y'a longtemps ! <br>";

    //•array_key_exists — Vérifie si une clé existe dans un tableau
    if(array_key_exists("good", $a))
        echo '<br> Key y est !';
    else
        echo "<br> Broken key ! <br>";
    
    //•array_search — Recherche dans un tableau la clé associée à une valeur
    $c=array(12,23,45,56,78,89);
    $b=array_search(45, $c);
    echo 'Key =' , $b, "<br>";

    //•array_count_values — Compte le nombre de valeurs d'un tableau --- Retourne un tableau contenant les valeurs du tableau array comme clés et leur fréquence comme valeurs. 
    $c=array(4,5,7,4,8,7,4,0);
    $d=array_count_values($c);
    echo '<pre>array_count_values',print_r($d),'</pre>';

    //•array_merge — Fusionne plusieurs tableaux en un seul
    $a=array('a'=>8, 'b', 'c'=>3);
    $b=array("b", "c"=>8, 'a');
    $c=array_merge($a,$b);
    echo '<pre>array_merge',print_r($c),'</pre>';
    /*•array_push — Empile un ou plusieurs éléments à la fin d'un tableau
    •array_pop — Dépile un élément de la fin d'un tableau

    •array_unshift — Empile un ou plusieurs éléments au début d'un tableau
    •array_shift — Dépile un élément au début d'un tableau
    */

    //
?>