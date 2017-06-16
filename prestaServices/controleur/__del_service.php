<?php

	require_once('../modele/structure/service.class.php');
	require_once('../modele/dao/service.dao.php');

	if(isset($_GET['id']) and !empty($_GET['id'])) {
		
		$sdao = new ServiceDAO();
		$sdao->del($_GET['id']);
		
		header('Location: ../vue/service.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}

?>