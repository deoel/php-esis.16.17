<?php

	require_once('fonction.class.php');
	require_once('fonction.dao.php');
				
				

	if(isset($_POST['intitule'], $_POST['description'])
		and !empty($_POST['intitule']) and !empty($_POST['description'])) {
		
		$f = new Fonction(0, $_POST['intitule'], $_POST['description']);
		
		$fdao = new FonctionDAO();
		
		$lf = $fdao->getAllFonction();
		$find = false;
		foreach($lf as $fo) {
			if($fo->getIntitule() == $f->getIntitule()) {
				$find = true;
				break;
			} 
		}
		if(!$find) {
			$fdao->add($f);
		}
		
		header('Location: fonctions.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}

?>