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
		function delTache($id)
		{
			if($id != null)
			{
				$statment="DELETE FROM `tache` WHERE id=:id";
				$req = $this->bdd->prepare($statment);
				$req->execute(array(
					'id'=>$id
					));
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
				$statment="SELECT count(*) FROM tache WHERE idagent=:id";
				$req = $this->bdd->prepare($statment);
				$req->execute(array(
					'id'=>$id
					));
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
				$statment="INSERT INTO tache (id, description, datedebut, datefin, idagent) VALUES (:id, :description, :datedebut, :datefin, :idagent)";
				$req =$this->bdd->prepare($statment);
				$req->execute(array(
				'id'=>'null',
				'description'=>$tache->getDescription(),
				'datedebut'=> $tache->getDatedebut(),
				'datefin'=>$tache->getDatefin(),
				'idagent'=>$tache->getIdagent()
				));
				
			}
		}
		function editTache($tache)
		{
			if($tache != null)
			{
				$statment="UPDATE  tache SET  description=:description, datedebut=:datedebut, datefin=:datefin, idagent=:idagent where id=:id";
				$req =$this->bdd->prepare($statment);
				$req->execute(array(
				'id'=>$tache->getId(),
				'description'=>$tache->getDescription(),
				'datedebut'=> $tache->getDatedebut(),
				'datefin'=>$tache->getDatefin(),
				'idagent'=>$tache->getIdagent()
				));
				
			}
		}
		
	}

?>