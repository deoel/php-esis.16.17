<?php

	class Etudiant {
		private $nom;
		private $postnom;
		private $prenom;
		private $genre;
		private $dateNaissance;
		
		public function __construct($nom, $postnom, $prenom, $genre, $dateNaissance){
			$this->nom = $nom;
			$this->postnom = $postnom;
			$this->prenom = $prenom;
			$this->genre = $genre;
			$this->dateNaissance = $dateNaissance;
		}
		
		public function presentation() {
			echo utf8_encode('
				<strong>Nom : </strong> '.$this->nom.'<br />
				<strong>Postnom : </strong> '.$this->postnom.'<br />
				<strong>Prénom : </strong> '.$this->prenom.'<br />
				<strong>Genre : </strong> '.$this->genre.'<br />
				<strong>Date de naissance : </strong> '.$this->dateNaissance.'<br />
				<hr />
			');
		}
		
		public function getNom() {
			return $this->nom;
		}
		
		public function setNom($nom) {
			$this->nom = $nom;
		}
		
		public function getPostnom() {
			return $this->Postnom;
		}
		
		public function setPostnom($postnom) {
			$this->postnom = $postnom;
		}
		
		public function getPrenom() {
			return $this->Prenom;
		}
		
		public function setPrenom($prenom) {
			$this->prenom = $prenom;
		}
		
		public function getGenre() {
			return $this->genre;
		}
		
		public function setGenre($genre) {
			$this->genre = $genre;
		}
		
		public function getDateNaissance() {
			return $this->dateNaissance;
		}
		
		public function setDateNaissance($dateNaissance) {
			$this->dateNaissance = $dateNaissance;
		}
	}

?>