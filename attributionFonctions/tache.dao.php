<?php

	require_once('connexion.dao.php');
	
	class TacheDAO {
		private $bdd;
		function __construct() {
			$this->bdd = Connexion::getConnexion();
		}
		
		function getAllTache() {
			$req = $this->bdd->query('SELECT * FROM tache');
			$tabTache = array();
			while($data = $req->fetch()) {
				$a = new Tache($data['id'], $data['description'], $data['datedebut'], $data['datefin'], $data['idagent']);
				$tabTache[] = $a;
			}
			function getNombreTache($idagent) {
			$req = $this->bdd->prepare('SELECT COUNT(*) FROM tache WHERE idagent= :idagent');
			$req->execute(array('idagent' => $idagent));
			
			$resultat = $req->fetch()[0];
			return $resultat;
		}
			
			$req->closeCursor();
			
			return $tabTache;
		}
		
			function add(tache $t) {
			$req = $this->bdd->prepare('INSERT INTO tache( id, description, datedebut, datefin, idagent)
										VALUES( :id, :description, :datedebut, :datefin, :idagent)');
			$req->execute(array(
			
				'id' => $t->getId(),
				'description' => $t->getDescription(),
				'datedebut' => $t->getDatedebut(),
				'datefin' => $t->getDatefin(),
				'idagent' => $t->getIdagent()
				
			));
	}
		function change(Tache $t) {
			$req = $this->bdd->prepare('UPDATE tache SET description= :description, datedebut=:datedebut, datefin=:datefin, idagent=:idagent
			 WHERE id = :id');
			$req->execute(array(
				'description' => $t->getDescription(),
				'id' => $t->getId(),
				'description' => $t->getDescription(),
				'datedebut' => $t->getDatedebut(),
				'datefin' => $t->getDatefin(),
				'idagent' => $t->getIdagent()
			));
		}
		
		function del($idtache) {
			$req = $this->bdd->prepare('DELETE FROM  tache WHERE id = :id');
			$req->execute(array(
				'id' => $idtache
			));
		}
	
		}
	
	
	
 ?>
