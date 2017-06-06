<?php
    try{
        $host='mysql:host=localhost;dbname=journaletudiant';
        $user='root';
        $pwd='';
        $bdd= new PDO($host, $user, $pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        /*print('CNX SCDD');
        $req = $bdd->exec("update journal set nom='elisée', promotion='g2', cours='esis', appreciation='good' where id=31");
        echo "bdd =  ".$req;*/

    }catch(Exception $e){
        die('Fatal Error'. $e->getMessage());
    }
    if(isset($_POST['id'], $_POST['nom'], $_POST['prom'], $_POST['cours'], $_POST['apprec'])){
        $req=$bdd->prepare("update journal set nom= :nom, promotion= :promotion, cours= :cours, appreciation= :appreciation where id= :id");
        $res = $req->execute(array('nom' => $_POST['nom'],
        'promotion' => $_POST['prom'],
        'cours' => $_POST['cours'],
        'appreciation' => $_POST['apprec'],
        'id' => $_POST['id']
        ));
        
        /*$req = $bdd->exec("UPDATE journal SET nom='deoel', promotion='deoel', cours='deoel', appreciation='deoel' WHERE id=16");
        echo "val ".$res;*/

        //print "<pre>Well donee...</pre>";
        header('location: journal.php');
        //include_once('journal.php');
    }
?>