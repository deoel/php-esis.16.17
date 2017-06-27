<?php

	require_once('tache.class.php');
	require_once('tache.dao.php');

	if(isset($_POST['datedebut'],$_POST['datefin'], $_POST['description'], $_POST['idagent']  )
		and !empty($_POST['datedebut']) and !empty($_POST['datefin']) 
		and !empty($_POST['description']) and !empty($_POST['idagent'])) {
		
		$t = new Tache($_POST['datedebut'],$_POST['datefin'], $_POST['description'], $_POST['idagent']);
		$tdao = new TacheDAO();
		$lt = $tdao->getAllTache();
		$find = false;
		foreach($lt as $te) {
			if($te->getDescription() == $t->getDescription()) {
				$find = true;
				break;
			} 
		}
		if(!$find) {
			$tdao->change($t);
		}
		
		header('Location: tache.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}

?>