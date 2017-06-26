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

		function supprimerTache($id_tache)
		{
			$req = $this->bdd->prepare('DELETE FROM tache WHERE id  = :id');
			$req->execute(array("id"=>$id_tache));
		}

		function ajouterTache(Tache $tache)
        {
            $req = $this->bdd->prepare('INSERT INTO tache SET description=:description,datedebut=:datedebut,datefin=:datefin,idagent=:idagent');
            $req->execute(array("description"=>$tache->getDescription(),"datedebut"=>$tache->getDatedebut(),"datefin"=>$tache->getDatefin(),"idagent"=>$tache->getIdagent()));
        }

        function getNombreTache($idfonction) {
			$req = $this->bdd->prepare('SELECT COUNT(*) FROM tache WHERE idagent = :idagent');
			$req->execute(array('idagent' => $idfonction));
			
			$resultat = $req->fetch()[0];
			return $resultat;
		}
		function modifierTache(Tache $tache)
		{
			$req = $this->bdd->prepare('UPDATE tache SET description=?,datedebut=?,datefin=? WHERE id=?');
            $req->execute([$tache->getDescription(),$tache->getDatedebut(),$tache->getDatefin(),$tache->getId()]);
		}
		
	}

?>