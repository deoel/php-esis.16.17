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
	
	$req = $bdd->query("SELECT * FROM journal");
	
	while($data = $req->fetch()) {
		echo '
			<p>
				Je m\'appelle <strong>'.$data['nomEtudiant'].'</strong>, <br/>
				Je suis en <strong>'.$data['promotion'].'</strong>, alors voici
				mon avis sur le cours 
				<strong>['.$data['intituleCoursVu'].']</strong> : <br /><br />
				'.$data['appreciation'].'<br />
				<a href="modifjournal.php?id='.$data['id'].'">modifier</a> - 
				<a href="deljournal.php?id='.$data['id'].'">supprimer</a>				
			</p><hr />
		';
	}
	
	
	$req->closeCursor();
?>