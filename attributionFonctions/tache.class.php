<?php

	class Tache {
		private $id;
		private $description;
		private $datedebut;
		private $datefin;
		private $idagent;
		
		function __construct($id, $description, $datedebut, $datefin, $idagent) {
			$this->id = $id;
			$this->description = $description;
			$this->datedebut = $datedebut;
			$this->datefin = $datefin;
			$this->idagent = $idagent;
		}

		function getId() {
			return $this->id;
		}

		function getDescription() {
			return $this->description;
		}

		function getDatedebut() {
			return $this->datedebut;
		}

		function getDatefin() {
			return $this->datefin;
		}

		function getIdagent() {
			return $this->idagent;
		}

		function setId($id) {
			$this->id = $id;
		}

		function setDescription($description) {
			$this->description = $description;
		}

		function setDatedebut($datedebut) {
			$this->datedebut = $datedebut;
		}

		function setDatefin($datefin) {
			$this->datefin = $datefin;
		}

		function setIdagent($idagent) {
			$this->idagent = $idagent;
		}
	}

?>