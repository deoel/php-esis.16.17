<?php	

	class Agent {
		private $id;
		private $nom;
		private $genre;
		private $tel;
		private $email;
		private $idfonction;
		
		function __construct($id, $nom, $genre, $tel, $email, $idfonction) {
			$this->id = $id;
			$this->nom = $nom;
			$this->genre = $genre;
			$this->tel = $tel;
			$this->email = $email;
			$this->idfonction = $idfonction;
		}

		function getId() {
			return $this->id;
		}

		function getNom() {
			return $this->nom;
		}

		function getGenre() {
			return $this->genre;
		}

		function getTel() {
			return $this->tel;
		}

		function getEmail() {
			return $this->email;
		}

		function getIdfonction() {
			return $this->idfonction;
		}

		function setId($id) {
			$this->id = $id;
		}

		function setNom($nom) {
			$this->nom = $nom;
		}

		function setGenre($genre) {
			$this->genre = $genre;
		}

		function setTel($tel) {
			$this->tel = $tel;
		}

		function setEmail($email) {
			$this->email = $email;
		}

		function setIdfonction($idfonction) {
			$this->idfonction = $idfonction;
		}
	}

?>