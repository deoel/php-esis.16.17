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
    if(isset($_GET['id'])){
        $req=$bdd->prepare("DELETE FROM journal WHERE id= :id");
        $res = $req->execute(array(
        'id' => $_GET['id']
        ));
        /*
        $req = $bdd->exec("UPDATE journal SET nom='deoel', promotion='deoel', cours='deoel', appreciation='deoel' WHERE id=16");
        $req = $bdd->exec("update journal set nom='elisée', promotion='g2', cours='esis', appreciation='good' where id=31");
        echo "bdd =  ".$req;*/

        //print "<pre>Well donee...</pre>";
        header('location: journal.php');
        //include_once('journal.php');
    }
?>