<?php

	class Membre {
		private $id;
		private $nomcomplet;
		private $genre;
		private $tel;
		private $email;
		private $adressephysique;
		private $competences;
		private $statut;
		private $profil;
		private $pwd;
		
		function __construct($id, $nomcomplet, $genre, $tel, $email, $adressephysique, $competences, $statut, $profil, $pwd) {
			$this->id = $id;
			$this->nomcomplet = $nomcomplet;
			$this->genre = $genre;
			$this->tel = $tel;
			$this->email = $email;
			$this->adressephysique = $adressephysique;
			$this->competences = $competences;
			$this->statut = $statut;
			$this->profil = $profil;
			$this->pwd = $pwd;
		}

		function getId() {
			return $this->id;
		}

		function getNomcomplet() {
			return $this->nomcomplet;
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

		function getAdressephysique() {
			return $this->adressephysique;
		}

		function getCompetences() {
			return $this->competences;
		}

		function getStatut() {
			return $this->statut;
		}

		function getProfil() {
			return $this->profil;
		}

		function getPwd() {
			return $this->pwd;
		}

		function setId($id) {
			$this->id = $id;
		}

		function setNomcomplet($nomcomplet) {
			$this->nomcomplet = $nomcomplet;
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

		function setAdressephysique($adressephysique) {
			$this->adressephysique = $adressephysique;
		}

		function setCompetences($competences) {
			$this->competences = $competences;
		}

		function setStatut($statut) {
			$this->statut = $statut;
		}

		function setProfil($profil) {
			$this->profil = $profil;
		}

		function setPwd($pwd) {
			$this->pwd = $pwd;
		}
	}

?>