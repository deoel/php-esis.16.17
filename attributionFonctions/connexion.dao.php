<?php

	class Connexion {
		static function getConnexion() {
			try {
				$host = 'mysql:host=localhost;dbname=attribution_fonctions';
				$user = 'root';
				$pwd = '';
				$bdd = new PDO($host, $user, $pwd, 
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			
			} catch(Exception $e) {
				die('Erreur : '.$e->getMessage());
			}
			
			return $bdd;
		}
	}

?>