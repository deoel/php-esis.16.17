<?php

	require_once('tache.class.php');
	require_once('tache.dao.php');

	if(isset($_POST['id'],$_POST['description'],$_POST['datedebut'],$_POST['datefin'],$_POST['idagent']) and !empty($_POST['id']) and !empty($_POST['description'])
		and !empty($_POST['datedebut']) and !empty($_POST['datefin']) and !empty($_POST['idagent']))
	{
		$t = new Tache($_POST['id'],$_POST['description'],$_POST['datedebut'],$_POST['datefin'],$_POST['idagent']);
		$tdao = new TacheDAO();
		$lt = $tdao->getAllTache();

		$find = false;
		foreach($lt as $te) {
			if($te->getDescription() == $t->getDescription()){
				$find = true;
				break;
			} 
		}
		if(!$find) {
			$tdao->Modifier($t);
		}
		
		header('Location: taches.php');	
	} 

?>