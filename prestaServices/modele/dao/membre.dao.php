<?php

	require_once('connexion.dao.php');
	require_once('../structure/membre.class.php');
	
	class MembreDAO {
		private $bdd;
		function __construct() {
			$this->bdd = Connexion::getConnexion();
		}
		
		function add(Membre $m) {
			$req = $bdd->prepare('INSERT INTO membre(nomcomplet, genre,
			tel, email, adressephysique, competences, statut, profil, pwd)
			VALUES(:nomcomplet, :genre, :tel, :email, :adressephysique, 
			:competences, :statut, :profil, :pwd)');
			$req->execute(array(
				'nomcomplet' => $m->getNomcomplet(),
				'genre' => $m->getGenre(),
				'tel' => $m->getTel(),
				'email' => $m->getEmail(),
				'adressephysique' => $m->getAdressephysique(),
				'competences' => $m->getCompetences(),
				'statut' => $m->getStatut(),
				'profil' => $m->getProfil(),
				'pwd' => $m->getPwd()
			));
		}
		
		function change(Membre $m) {
			$req = $bdd->prepare('UPDATE membre SET nomcomplet =:nomcomplet, 
			genre = :genre, tel = :tel, email = :email, 
			adressephysique = :adressephysique, competences = :competences, 
			statut = :statut, profil = :profil, pwd = :pwd WHERE id = :id');
			$req->execute(array(
				'nomcomplet' => $m->getNomcomplet(),
				'genre' => $m->getGenre(),
				'tel' => $m->getTel(),
				'email' => $m->getEmail(),
				'adressephysique' => $m->getAdressephysique(),
				'competences' => $m->getCompetences(),
				'statut' => $m->getStatut(),
				'profil' => $m->getProfil(),
				'pwd' => $m->getPwd(),
				'id' => $m->getId()
			));
		}
		
		function del($idMembre) {
			$req = $bdd->prepare('DELETE FROM membre WHERE id = :id');
			$req->execute(array(
				'id' => $m->getId()
			));
		}
		
		function getAllMembre() {
			$req = $bdd->query('SELECT * FROM membre');
			$tabMembre = array();
			foreach($data = $req->fetch()) {
				$m = new Membre($data['id'], $data['nomcomplet'], 
				$data['genre'], $data['tel'], $data['email'], 
				$data['adressephysique'], $data['competences'],
				$data['statut'], $data['profil'], $data['pwd']);
				$tabMembre[] = $m;
			}
			
			$req->closeCursor();
			
			return $tabMembre;
		}
	}

?>