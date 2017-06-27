<?php

	require_once('connexion.dao.php');
	
	class AgentDAO {
		private $bdd;
		function __construct() {
			$this->bdd = Connexion::getConnexion();
		}
		
		function getAllAgent() {
			$req = $this->bdd->query('SELECT * FROM agent');
			$tabAgent = array();
			while($data = $req->fetch()) {
				$a = new Agent($data['id'], $data['nom'], $data['genre'], $data['tel'], $data['email'], $data['idfonction']);
				$tabAgent[] = $a;
			}
			
			$req->closeCursor();
			
			return $tabAgent;
		}
		
		function add(Agent $a) {
			$req = $this->bdd->prepare('INSERT INTO agent(nom, genre, tel, email, idfonction) 
									VALUES(:nom, :genre, :tel, :email, :idfonction)');
			$req->execute(array(
				'nom' => $a->getNom(),
				'genre' => $a->getGenre(),
				'tel' => $a->getTel(),
				'email' => $a->getEmail(),
				'idfonction' => $a->getIdfonction()
			));
		}
		
		function getNombreAgent($idfonction) {
			$req = $this->bdd->prepare('SELECT COUNT(*) FROM agent WHERE idfonction = :idfonction');
			$req->execute(array('idfonction' => $idfonction));
			
			$resultat = $req->fetch()[0];
			return $resultat;
		}
		function getNombreAgentFemme($idfonction) {
			$req = $this->bdd->prepare('SELECT COUNT(*) FROM agent WHERE idfonction = :idfonction and genre = "F"');
			$req->execute(array('idfonction' => $idfonction));
			
			$resultat = $req->fetch()[0];
			return $resultat;
		}
		function getNombreAgentHomme($idfonction) {
			$req = $this->bdd->prepare('SELECT COUNT(*) FROM agent WHERE idfonction = :idfonction and genre = "M"');
			$req->execute(array('idfonction' => $idfonction));
			
			$resultat = $req->fetch()[0];
			return $resultat;
		}
		function change($fonctions,$ident) {
			$req = $this->bdd->prepare('UPDATE agent SET idfonction = :idfonction WHERE id = :id');
			$req->execute(array(
				'idfonction' => $fonctions ,
				'id' => $ident
			));
		}
	}

?>