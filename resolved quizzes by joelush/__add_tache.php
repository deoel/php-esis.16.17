<?php

if(isset($_POST['description'],$_POST['datedebut'],$_POST['datefin'],$_POST['idagent']) && !empty($_POST['description']) && !empty($_POST['datedebut']) && !empty($_POST['datefin']) && !empty($_POST['idagent']))
{
	require_once("tache.class.php");
	require_once("tache.dao.php");
	$t=new Tache(1,$_POST['description'],$_POST['datedebut'],$_POST['datefin'],$_POST['idagent']);
	$ajout=new TacheDAO();
	$ins=$ajout->ajouterTache($t);
	header('Location: taches.php');

}

?>