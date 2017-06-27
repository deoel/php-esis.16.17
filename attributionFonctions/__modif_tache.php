<?php 
	require_once('tache.dao.php');
	require_once('tache.class.php');

	if (isset($_POST['id'], $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']) 
		and !empty($_POST['description']) and !empty($_POST['datedebut']) and !empty($_POST['datefin']) and !empty($_POST['idagent'])) {

		$tdao = new TacheDAO();
		$tdao->modify($_POST['id'], $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']);
		header('Location: taches.php');
	}else{
		echo 'Erreur dans les données envoyées';
	}
 ?>