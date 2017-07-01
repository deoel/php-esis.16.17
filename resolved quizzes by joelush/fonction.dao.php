<?php

	require_once('connexion.dao.php');
	
	class FonctionDAO {
		private $bdd;
		function __construct() {
			$this->bdd = Connexion::getConnexion();
		}
		
		function add(Fonction $f) {
			$req = $this->bdd->prepare('INSERT INTO fonction(intitule, description)
										VALUES(:intitule, :description)');
			$req->execute(array(
				'intitule' => $f->getIntitule(),
				'description' => $f->getDescription()
			));
		}
		
		function getAllFonction() {
			$req = $this->bdd->query('SELECT * FROM fonction');
			$tabFonction = array();
			while($data = $req->fetch()) {
				$f = new Fonction($data['id'], $data['intitule'], $data['description']);
				$tabFonction[] = $f;
			}
			
			$req->closeCursor();
			
			return $tabFonction;
		}
	}

?>