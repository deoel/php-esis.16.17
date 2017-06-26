<?php 

	require_once('tache.dao.php');
	//var_dump($_POST);

	if (isset($_GET['id']) and !empty($_GET['id'])) {

		$tdao = new TacheDAO();
		$tdao->supprimerTache($_GET['id']);
		
		header('Location: taches.php');
	}
	else
	   {
		echo 'erreur quelque part';
	   }
 
 ?>