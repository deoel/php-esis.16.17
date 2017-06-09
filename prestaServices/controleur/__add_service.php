<?php

	require_once('../modele/structure/service.class.php');
	require_once('../modele/dao/service.dao.php');

	if(isset($_POST['intitule'], $_POST['description'])
		and !empty($_POST['intitule']) and !empty($_POST['description'])) {
		
		$s = new Service(0, $_POST['intitule'], $_POST['description']);
		$sdao = new ServiceDAO();
		$ls = $sdao->getAllService();
		$find = false;
		foreach($ls as $se) {
			if($se->getIntitule() == $s->getIntitule()) {
				$find = true;
				break;
			} 
		}
		if(!$find) {
			$sdao->add($s);
		}
		
		header('Location: ../vue/service.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}

?>