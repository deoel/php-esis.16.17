<?php

	class Prestation {
		private $id;
		private $idmembre;
		private $idservice;
		
		function __construct($id, $idmembre, $idservice) {
			$this->id = $id;
			$this->idmembre = $idmembre;
			$this->idservice = $idservice;
		}

		function getId() {
			return $this->id;
		}

		function getIdmembre() {
			return $this->idmembre;
		}

		function getIdservice() {
			return $this->idservice;
		}

		function setId($id) {
			$this->id = $id;
		}

		function setIdmembre($idmembre) {
			$this->idmembre = $idmembre;
		}

		function setIdservice($idservice) {
			$this->idservice = $idservice;
		}


	}


?>