<?php

	require_once('tache.class.php');
	require_once('tache.dao.php');
				
				

	if(isset($_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent'])
		and !empty($_POST['description']) and !empty($_POST['datedebut']) and !empty($_POST['datefin']) and !empty($_POST['idagent'])) {
		
		$t = new Tache(0, $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']);
		
		$tdao = new TacheDAO();
		
		$lt = $tdao->getAllTache();
		$find = false;
		foreach($lt as $ta) {
			if($ta->getDescription() == $t->getDescription()) {
				$find = true;
				break;
			} 
		}
		if(!$find) {
			$tdao->add($t);
		}
		
		header('Location: index.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}

?>