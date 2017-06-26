<?php

	require_once('../modele/structure/service.class.php');
	require_once('../modele/dao/service.dao.php');

	if(isset($_POST['id'], $_POST['intitule'], $_POST['description'])
		and !empty($_POST['id']) and !empty($_POST['intitule']) 
		and !empty($_POST['description'])) {
		
		$s = new Service($_POST['id'], $_POST['intitule'], $_POST['description']);
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
			$sdao->change($s);
		}
		
		header('Location: ../vue/service.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}

?>