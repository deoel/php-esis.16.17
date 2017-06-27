<?php

	require_once('tache.class.php');
	require_once('tache.dao.php');
	require_once('agent.class.php');
	require_once('agent.dao.php');
				
	$tdao = new TacheDAO();
	$lt = $tdao->getAllTache();
	$adao = new AgentDAO();
	$la = $adao->getAllAgent();
				

	if(isset($_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent'])
		and !empty($_POST['description']) and !empty($_POST['datedebut']) and !empty($_POST['datefin']) and !empty($_POST['idagent'])) {
		
		$t = new Tache(0, $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']);
		
		$adao = new TacheDAO();
		$adao->add($t);
		
		header('Location: taches.php');
		
		
	} else {
		echo 'Erreur dans les données envoyées';
	}

?>