<?php

	require_once('tache.class.php');
	require_once('tache.dao.php');

	if(isset($_GET['id']) and !empty($_GET['id'])) {
		
		$tdao = new TacheDAO();
		$tdao->del($_GET['id']);
		
		header('Location: tache.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}

?>