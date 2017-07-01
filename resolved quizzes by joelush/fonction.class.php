<?php

	class Fonction {
		private $id;
		private $intitule;
		private $description;
		
		function __construct($id, $intitule, $description) {
			$this->id = $id;
			$this->intitule = $intitule;
			$this->description = $description;
		}
		function getId() {
			return $this->id;
		}

		function getIntitule() {
			return $this->intitule;
		}

		function getDescription() {
			return $this->description;
		}

		function setId($id) {
			$this->id = $id;
		}

		function setIntitule($intitule) {
			$this->intitule = $intitule;
		}

		function setDescription($description) {
			$this->description = $description;
		}    
	}

?>