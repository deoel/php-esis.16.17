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
		function delTache($id=null)
		{
			if($id != null)
			{
				$req = $this->bdd->query("DELETE FROM `tache` WHERE id='$id'");
				if($req == TRUE)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		function getTache($id=null)
		{
			if($id != null)
			{
				$req = $this->bdd->query("SELECT * FROM tache WHERE id='$id'");
				$tabTache = array();
				while($data = $req->fetch()) {
					$a = new Tache($data['id'], $data['description'], $data['datedebut'], $data['datefin'], $data['idagent']);
					$tabTache[] = $a;
				}
			
			
				$req->closeCursor();
			
				return $tabTache[0];
			}
			else
			{
				return null;
			}
		}
		function getTacheNbr($id=null)
		{
			if($id != null)
			{
				$req = $this->bdd->query("SELECT count(*) FROM tache WHERE idagent='$id'");
				$data = $req->fetchColumn();
				$req->closeCursor();
				return $data;
			}
			else
			{
				return 0;
			}
		}
		function AddTache($tache = null)
		{
			if($tache != null)
			{
				$description = $tache->getDescription();
				$dateDebut = $tache->getDatedebut();
				$dateFin = $tache->getDatefin();
				$idAgent = $tache->getIdagent();
				$req = $this->bdd->query("INSERT INTO tache (id, description, datedebut, datefin, idagent) VALUES (null, '$description', '$dateDebut', '$dateFin','$idAgent')");
				if($req == TRUE)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		function editTache($tache = null)
		{
			if($tache != null)
			{
				$description = $tache->getDescription();
				$dateDebut = $tache->getDatedebut();
				$dateFin = $tache->getDatefin();
				$idAgent = $tache->getIdAgent();
				$id = $tache->getId();
				$req = $this->bdd->query("UPDATE tache SET description='$description', datedebut='$dateDebut', datefin='$dateFin', idAgent='$idAgent' WHERE id='$id'");
				if($req == TRUE)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}

?>