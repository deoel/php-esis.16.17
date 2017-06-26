<?php 
	require_once('tache.class.php');
	require_once('tache.dao.php');
	//var_dump($_POST);

    if (isset($_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']) 
		and !empty($_POST['description']) 
		and !empty($_POST['datedebut']) 
		and !empty($_POST['datefin']) 
		and !empty($_POST['idagent'])) {

	    $tache = new Tache(0, $_POST['description'], $_POST['datedebut'], $_POST['datefin'], $_POST['idagent']);
	    $tdao = new TacheDAO();
	    $lt = $tdao->getAllTache();
	    $find = false;
	    foreach ($lt as $t) {
		   if ($tache->getDescription() == $t->getDescription()) {
			$find = true;
		}
	}
	if (!$find) {

		$tdao->add($tache);
		header('Location: taches.php');
	}
		
	}
	else{
		echo 'Erreur quelque part';
	    }
 ?>