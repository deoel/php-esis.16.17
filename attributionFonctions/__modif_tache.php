<?php 
	require_once('tache.dao.php');
	require_once('tache.class.php');
	//var_dump($_POST);

 if (isset($_POST['id'], $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']) 
		and !empty($_POST['description']) 
		and !empty($_POST['datedebut']) 
		and !empty($_POST['datefin']) 
		and !empty($_POST['idagent'])) {

		$tdao = new TacheDAO();
		$tdao->modifierTache($_POST['id'], $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']);

		header('Location: taches.php');
	}
	else{
		echo 'erreur quelque part';
	    }
 ?>