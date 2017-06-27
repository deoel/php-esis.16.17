<?php

	require_once('connexion.dao.php');
	
	class TacheDAO {
		private $bdd;
		function __construct() {
			$this->bdd = Connexion::getConnexion();
		}
		
		function add(Tache $t) {
			$req = $this->bdd->prepare('INSERT INTO tache (description, datedebut, datefin, idagent)
										VALUES(:description, :datedebut, :datefin, :idagent)');
			$req->execute(array(
				'description' => $t->getDescription(),
				'datedebut' => $t->getDatedebut(),
				'datefin' => $t->getDatefin(),
				'idagent' => $t->getIdagent()
			));
		}
		function change(Tache $t) {
			$req = $this->bdd->prepare('UPDATE tache SET description = :description, datedebut = :datedebut, datefin = :datefin,
			idagent = :idagent WHERE id = :id');
			$req->execute(array(
				'description' => $t->getDescription() ,
				'datedebut' => $t->getDatedebut(),
				'datefin' => $t->getDatefin() ,
				'idagent' => $t->getIdagent(),
				'id' => $t->getId()
			));
		}
		
		function del($idTache) {
			$req = $this->bdd->prepare('DELETE FROM tache WHERE id = :id');
			$req->execute(array(
				'id' => $idTache
			));
		}
		function getNombreTache($idagent) {
			$req = $this->bdd->prepare('SELECT COUNT(*) FROM tache WHERE idagent = :idagent');
			$req->execute(array('idagent' => $idagent));
			
			$resultat = $req->fetch()[0];
			return $resultat;
		}
		function getAllTache() {
			$req = $this->bdd->query('SELECT * FROM tache');
			$tabTache = array();
			while($data = $req->fetch()) {
				$a = new Tache($data['id'], $data['description'], $data['datedebut'], $data['datefin'], $data['idagent']);
				$tabTache[] = $a;
			}
			
			$req->closeCursor();
			
			return $tabTache;
		}
		
		
	}

?>