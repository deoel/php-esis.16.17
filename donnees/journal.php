<?php
    try{
        $host='mysql:host=localhost;dbname=journaletudiant';
        $user='root';
        $pwd='';
        $bdd= new PDO($host, $user, $pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        //print('CNX SCDD');

    }catch(Exception $e){
        die('Fatal Error'. $e->getMessage());
    }
    
    $req=$bdd->query("SELECT * FROM journal");
    while($data=$req->fetch()){
        print "<p>
            <pre>Déclaration du(de la) dénommée <strong> {$data['nom']} </strong> ,</pre>
            <pre>Etudiant(e) en <strong> {$data['promotion']} </strong> </pre>
            <pre>A propos du cours de <strong> {$data['cours']}</strong>:</pre>
            <pre> {$data['appreciation']} </pre>
            <a href=\"modifjournal.php?id={$data['id']}\"> Modifier cet article </a> &nbsp;&nbsp; <a href=\"deljournal.php?id={$data['id']}\"> Supprimer cet article </a> <hr/>
        </p>";
    }
    $req->closeCursor();
?>