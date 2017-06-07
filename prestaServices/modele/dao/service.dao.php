<?php

	require_once('connexion.dao.php');
	require_once('../structure/service.class.php');
	
	class ServiceDAO {
		private $bdd;
		function __construct() {
			$this->bdd = Connexion::getConnexion();
		}
		
		function add(Service $s) {
			$req = $bdd->prepare('INSERT INTO service(intitule,description)
			VALUES(:intitule, :description)');
			$req->execute(array(
				'intitule' => $s->getIntitule(),
				'description' => $s->getDescription()
			));
		}
		
		function change(Service $s) {
			$req = $bdd->prepare('UPDATE service SET intitule = :intitule,
			description = :description WHERE id = :id');
			$req->execute(array(
				'intitule' => $s->getIntitule(),
				'description' => $s->getDescription(),
				'id' => $s->getId()
			));
		}
		
		function del($idService) {
			$req = $bdd->prepare('DELETE FROM service WHERE id = :id');
			$req->execute(array(
				'id' => $s->getId()
			));
		}
		
		function getAllService() {
			$req = $bdd->query('SELECT * FROM service');
			$tabService = array();
			foreach($data = $req->fetch()) {
				$s = new Service($data['id'], $data['intitule'], 
				$data['description']);
				$tabService[] = $s;
			}
			
			$req->closeCursor();
			
			return $tabService;
		}
	}

?>