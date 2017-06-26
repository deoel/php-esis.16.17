<?php

	require_once('agent.class.php');
	require_once('agent.dao.php');
				
				

	if(isset($_POST['send'])){	
		echo $_GET['id'];
		echo $_POST['idfonction'];		
		$fdao = new AgentDAO();
		$fdao->Update($_POST['id'],$_POST['idfonction']);
		
		
		
	
		
		header('Location: index.php');
		
		
	} else {

		echo 'Erreur dans les données envoyées';
	}

?>