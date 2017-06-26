<?php
	require_once('tache.class.php');
	require_once('tache.dao.php');
	session_start();

	if(isset($_POST['desc'], $_POST['datdeb'], $_POST['datef'])
		and !empty($_POST['desc']) and !empty($_POST['datdeb']) and !empty($_POST['datef'])) {		
		
		$fdao = new TacheDAO();

		$fdao->Update($_SESSION['identifiant'],$_POST['desc'],$_POST['datdeb'],$_POST['datef']);

		
		header('Location: taches.php');
		
		
	} else {
		echo 'Erreur dans les données envoyées';
	}
	session_destroy();

?>