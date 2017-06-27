<?php
 var_dump($_POST);
if(isset($_POST['description'],$_POST['datedebut'],$_POST['datefin'],$_POST['id_ag']))
{
	require_once("tache.dao.php");
	require_once("tache.class.php");

	$t=new Tache($_POST['id_ag'],$_POST['description'],$_POST['datedebut'],$_POST['datefin'],$_POST['id_ag']);
	$in=new TacheDAO();
	$s=$in->modifierTache($t);
	header('Location: taches.php');

}

?>