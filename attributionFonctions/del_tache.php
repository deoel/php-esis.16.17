<?php

	require_once('tache.class.php');
	require_once('tache.dao.php');
				
		
    $t = new Tache($_GET['id'], '', '', '', '', '');
    
    $tdao = new TacheDAO();
    $tdao->deleteTache($t);
    
    header('Location: taches.php');


?>