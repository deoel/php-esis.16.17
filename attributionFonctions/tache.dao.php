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
			
			$req->closeCursor();
			
			return $tabTache;
		}
		
		function add(Tache $t) {
			$req = $this->bdd->prepare('INSERT INTO tache(description, datedebut, datefin, idagent) 
									VALUES(:description, :datedebut, :datefin, :idagent)');
			$req->execute(array(
				'description' => $t->getDescription(),
				'datedebut' => $t->getDatedebut(),
				'datefin' => $t->getDatefin(),
				'idagent' => $t->getIdagent()
			));
		}
        
        function updateTache(Tache $t){
			$req = $this->bdd->prepare('UPDATE tache SET idagent=:idfonction where id=:id');
			$req->execute(array(
				'id' => $t->getId(),
				'idfonction' => $t->getIdagent()
			));
		}
		function deleteTache(Tache $a){
			$req = $this->bdd->prepare('DELETE FROM tache where id=:id');
			$req->execute(array(
				'id' => $a->getId()
			));
		}
		
	}

?>