<?php 
	require_once('tache.dao.php');

	if (isset($_GET['id']) and !empty($_GET['id'])) {

		$tdao = new TacheDAO();
		$tdao->delete($_GET['id']);
		header('Location: taches.php');
	}else{
		echo 'Erreur dans les données envoyées';
	}
 ?>