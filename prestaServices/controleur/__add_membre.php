<?php

	require_once('../modele/structure/service.class.php');
	require_once('../modele/dao/service.dao.php');
	require_once('../modele/structure/membre.class.php');
	require_once('../modele/dao/membre.dao.php');
	require_once('../modele/structure/prestation.class.php');
	require_once('../modele/dao/prestation.dao.php');

	if(isset($_POST['nomcomplet'], $_POST['genre'], $_POST['tel'], $_POST['email'], 
		$_POST['adressephysique'], $_POST['competences'], $_POST['statut'], $_POST['pwd'], $_POST['pwdconf'], 
		$_POST['service'])
		and !empty($_POST['nomcomplet']) and !empty($_POST['genre']) 
		and !empty($_POST['tel']) and !empty($_POST['email']) and !empty($_POST['adressephysique']) and !empty($_POST['competences']) 
		and !empty($_POST['statut']) and !empty($_POST['pwd']) and !empty($_POST['pwdconf']) 
		and !empty($_POST['service'])) {
		
		$m = new Membre(0, $_POST['nomcomplet'], $_POST['genre'], $_POST['tel'], 
		$_POST['email'], $_POST['adressephysique'], $_POST['competences'], $_POST['statut'], "", $_POST['pwd']);
		
		if($_POST['pwd'] != $_POST['pwdconf']) {
			echo 'Les deux mots de passe sont différents';
		} else {
			$mdao = new MembreDAO();
			$mdao->add($m);
			
			$lm = $mdao->getAllMembre();
			foreach($lm as $me) {
				if($me->getTel() == $m->getTel()) {
					$pdao = new PrestationDAO();
					
					foreach($_POST['service'] as $ids) {
						$p = new Prestation(0, $me->getId(), $ids);
						$pdao->add($p);
					}
					break;
				}
			}
		}
		
		
		header('Location: ../vue/membre.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}

?>