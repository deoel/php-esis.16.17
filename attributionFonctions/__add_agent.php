<?php

	require_once('agent.class.php');
	require_once('agent.dao.php');
				
				

	if(isset($_POST['nom'], $_POST['genre'], $_POST['tel'], $_POST['email'], $_POST['idfonction'])
		and !empty($_POST['nom']) and !empty($_POST['genre']) and !empty($_POST['tel']) and !empty($_POST['email']) and !empty($_POST['idfonction'])) {
		
		$a = new Agent(0, $_POST['nom'], $_POST['genre'], $_POST['tel'], $_POST['email'], $_POST['idfonction']);
		
		$adao = new AgentDAO();
		$adao->add($a);
		
		header('Location: index.php');
		
		
	} else {
		echo 'Erreur dans les données envoyées';
	}

?>