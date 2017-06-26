<?php

include_once('fonction.class.php');
include_once('fonction.dao.php');
include_once('agent.class.php');
include_once('agent.dao.php');
if(isset($_GET['id']) and !empty($_GET['id'])) {
		
		$fdao=new FonctionDAO();
		$fdao->sup($_GET['id']);
		
		//header('Location: ../vue/service.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}
	
	if(isset($_GET['id_agent']) and !empty($_GET['id_agent'])) {
		
		$adao=new AgentDAO();
		$adao->delete($_GET['id_agent']);
		
		//header('Location: ../vue/service.php');
		
		
	} else {
		echo 'Erreur quelque part';
	}
?>