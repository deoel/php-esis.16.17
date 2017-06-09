<?php

	require_once('connexion.dao.php');
	
	class ServiceDAO {
		private $bdd;
		function __construct() {
			$this->bdd = Connexion::getConnexion();
		}
		
		function add(Service $s) {
			$req = $this->bdd->prepare('INSERT INTO service(intitule,description)
			VALUES(:intitule, :description)');
			$req->execute(array(
				'intitule' => $s->getIntitule(),
				'description' => $s->getDescription()
			));
		}
		
		function change(Service $s) {
			$req = $this->bdd->prepare('UPDATE service SET intitule = :intitule,
			description = :description WHERE id = :id');
			$req->execute(array(
				'intitule' => $s->getIntitule(),
				'description' => $s->getDescription(),
				'id' => $s->getId()
			));
		}
		
		function del($idService) {
			$req = $this->bdd->prepare('DELETE FROM service WHERE id = :id');
			$req->execute(array(
				'id' => $idService
			));
		}
		
		function getAllService() {
			$req = $this->bdd->query('SELECT * FROM service');
			$tabService = array();
			while($data = $req->fetch()) {
				$s = new Service($data['id'], $data['intitule'], 
				$data['description']);
				$tabService[] = $s;
			}
			
			$req->closeCursor();
			
			return $tabService;
		}
	}

?>