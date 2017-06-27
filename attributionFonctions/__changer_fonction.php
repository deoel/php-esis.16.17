<?php
		require_once('agent.class.php');
		require_once('agent.dao.php');
		
		if(isset($_POST['idfonction'],$_POST['id']) 
			and !empty($_POST['idfonction']) 
			and !empty($_POST['id'])){
				
			$adao = new AgentDAO();
			$la = $adao->getAllAgent();
			foreach($la as $a){
				if ($a->getId() == $_POST['id']){
					$adao -> change($_POST['idfonction'],$_POST['id']);
				}
			}
		header('Location: index.php');	
		
		}else{
			echo'erreur qlq part';
		}	

	?>
