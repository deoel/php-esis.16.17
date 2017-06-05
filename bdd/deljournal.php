<?php 

	try {
		
		//créer l'accès à la base de données
		$host = 'mysql:host=localhost;dbname=journaletudiant';
		$user = 'root';
		$pwd = '';
		$bdd = new PDO($host, $user, $pwd, 
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
	} catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

	if(isset($_GET['id'])) {
		
		$req = $bdd->prepare("DELETE FROM journal WHERE id = :id");
		
		$req->execute(array('id' => $_GET['id']));
		
		header('Location: data1.php');
	}			
?>