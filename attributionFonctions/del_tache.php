<?php 
	require_once('tache.dao.php');

	if (isset($_GET['id']) and !empty($_GET['id'])) {

		$tdao = new TacheDAO();
		$tdao->supprimer($_GET['id']);
		header('Location: taches.php');
	}else{
		echo 'error on page del_tache.php';
	}
 ?>