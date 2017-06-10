<?php

	require_once('connexion.dao.php');
	
	class PrestationDAO {
		private $bdd;
		function __construct() {
			$this->bdd = Connexion::getConnexion();
		}
		
		function add(Prestation $p) {
			$req = $this->bdd->prepare('INSERT INTO prestation(idmembre,idservice)
			VALUES(:idmembre, :idservice)');
			$req->execute(array(
				'idmembre' => $p->getIdmembre(),
				'idservice' => $p->getIdservice()
			));
		}
		
		function change(Prestation $p) {
			$req = $this->bdd->prepare('UPDATE prestation SET idmembre = :idmembre,
			idservice = :idservice WHERE id = :id');
			$req->execute(array(
				'idmembre' => $p->getIdmembre(),
				'idservice' => $p->getIdservice(),
				'id' => $p->getId()
			));
		}
		
		function del($idPrestation) {
			$req = $this->bdd->prepare('DELETE FROM prestation WHERE id = :id');
			$req->execute(array(
				'id' => $idPrestation
			));
		}
		
		function getAllPrestation() {
			$req = $this->bdd->query('SELECT * FROM prestation');
			$tabPrestation = array();
			while($data = $req->fetch()) {
				$p = new Prestation($data['id'], $data['idmembre'], 
				$data['idservice']);
				$tabPrestation[] = $p;
			}
			
			$req->closeCursor();
			
			return $tabPrestation;
		}
	}

?>