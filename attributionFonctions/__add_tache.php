

	<?php require_once('tache.class.php'); ?>
	<?php require_once('tache.dao.php'); ?>
	<?php require_once('agent.class.php'); ?>
	<? require_once('agent.dao.php'); ?>
				
	<?php	

	var_dump($_POST);
	if (isset($_POST['description'],
	$_POST['datedebut'], 
	$_POST['datefin'], 
	$_POST['idagent'])
		and !empty($_POST['description'])
		and !empty($_POST ['datedebut'])
		and !empty($_POST['datefin'])
		and !empty($_POST['idagent'])){
			$tache= new  Tache(0, $_POST['description'], $_POST['datedebut'], $_POST['datefin'] ,$_POST['idagent'] );
			$tdao= new TacheDAO();
			$tdao->add($tache);
			header('Location: taches.php');
		}
		else {
			 echo '<strong>Erreur ! veuillez verifier les informations fournies</strong>';
		}
	
	
	?>