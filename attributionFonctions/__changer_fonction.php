﻿<?php

	require_once('agent.class.php');
	require_once('agent.dao.php');
	
    
	$a = new Agent($_POST['id'], '', '', '', '', $_POST['idfonction']);
		
	$adao = new AgentDAO();
	$adao->changerFonction($a);
		
	header('Location: index.php');
		
?>