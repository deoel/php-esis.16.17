<?php 
	require_once('tache.dao.php');
	require_once('tache.class.php');

	if (isset($_POST['id'], $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']) 
		and !empty($_POST['description']) and !empty($_POST['datedebut']) and !empty($_POST['datefin']) and !empty($_POST['idagent'])) {

		$tdao = new TacheDAO();
		$tdao->modif($_POST['id'], $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']);
		header('Location: taches.php');
	}else{
		echo 'error on page __modi_tache.php';
	}
 ?>