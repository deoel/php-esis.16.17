<?php

	require_once('tache.class.php');
	require_once('tache.dao.php');
				
				

	if(isset($_POST['idagent']) and isset($_POST['description']) and !empty($_POST['datedebut']) and !empty($_POST['datefin'])) 
	{
		$tache = new Tache(0, $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']);
		$tdao = new TacheDAO();
		
		if($tdao->AddTache($tache) == true)
		{
			header('Location: taches.php');
		}
		else
		{
			header('Location: taches.php');
		}
		
	} 
	else 
	{
		echo 'Remplissez Tous Les Champs';
	}

?>