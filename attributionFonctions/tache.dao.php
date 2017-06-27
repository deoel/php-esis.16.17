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

		function nbreTacheFontion($id){
					
			$req = $this->bdd->prepare('SELECT COUNT(*) FROM tache where idagent = :id');
					
			$req->execute(array('id'=>$id));
			$result = $req->fetch()[0];
			
			return $result;
		}

		function changerTache($id, $description, $debut, $fin, $idagent){
			
			$req = $this->bdd->prepare('UPDATE tache SET description =:description, datedebut = :datedebut, datefin = :datefin, idagent = :idagent
					where id = :id');
			   
			$req->execute(array(
				'id'=>$id,
				'description'=>$description,
				'datedebut'=>$debut,
				'datefin'=>$fin,
				'idagent'=>$idagent
				));
		}

		function supprimerTache($id){
			$req = $this->bdd->prepare('DELETE FROM tache where id = :id');
			
			$req->execute(array(
				'id'=>$id
				));
		}

		function ajouterTache(Tache $tache){
			$req = $this->bdd->prepare('INSERT INTO tache (description, datedebut, datefin, idagent) VALUES
				(:description, :datedebut, :datefin, :idagent)');
			
			$req->execute(array(
				'description'=>$tache->getDescription(),
				'datedebut'=>$tache->getDatedebut(),
				'datefin'=>$tache->getDatefin(),
				'idagent'=>$tache->getIdagent()
				));
		}
		
	}

?>