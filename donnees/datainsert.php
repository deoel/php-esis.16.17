<?php
    try{
        $host='mysql:host=localhost;dbname=journaletudiant';
        $user='root';
        $pwd='';
        $bdd= new PDO($host, $user, $pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        print('CNX SCDD');

    }catch(Exception $e){
        die('Fatal Error'. $e->getMessage());
    }
    if(isset($_POST['nom'], $_POST['prom'], $_POST['cours'], $_POST['apprec'])){
        $req=$bdd->prepare("INSERT INTO journal (nom, promotion, cours, appreciation) VALUES(:nom, :promotion, :cours, :appreciation)");
        $req->execute(array('nom' => $_POST['nom'],
        'promotion' => $_POST['prom'],
        'cours' => $_POST['cours'],
        'appreciation' => $_POST['apprec']
        ));

        //print "<pre>Well donee...</pre>";
        include_once('journal.php');
    }
?>