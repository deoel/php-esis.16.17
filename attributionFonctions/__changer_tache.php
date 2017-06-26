<?php

	require_once('tache.class.php');
	require_once('tache.dao.php');
				
	
    $t = new Tache($_POST['id'], '', '', '', $_POST['idagent']);
    
    $tdao = new TacheDAO();
    $tdao->updateTache($t);
    
    header('Location: taches.php');


?>