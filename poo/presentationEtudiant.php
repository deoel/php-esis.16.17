<?php
	session_start();
	if(!isset($_SESSION['etudiant'])) {
		$_SESSION['etudiant'] = array();
	}
?>
<!doctype html>
<html>
	<head>
		<title>Présentation des étudiants</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Présentation des étudiants</h1>
		<?php
			
			require_once('etudiant.class.php');
			
			if(isset($_POST['nom'], $_POST['postnom'], $_POST['prenom'], $_POST['genre'], $_POST['dateNaissance'])) {
				
				$_SESSION['etudiant'][] = array('nom'=>$_POST['nom'], 
												'postnom'=>$_POST['postnom'],
												'prenom'=>$_POST['prenom'],
												'genre'=>$_POST['genre'],
												'dateNaissance'=>$_POST['dateNaissance']);
				foreach((Array)$_SESSION['etudiant'] as $e) {
					/*$etu1 = new Etudiant($e['nom'], $e['postnom'], $e['prenom'], $e['genre'], $e['dateNaissance']);
					echo '<p>';
					$etu1->presentation();
					echo '</p>';*/
					print_r($e);
				}
				
			}
			
		?>
		<form method="post" action="presentationEtudiant.php">
			<label for="nom">Nom : </label>
			<input type="text" name="nom" id="nom" required /><br />
			<label for="postnom">Postnom : </label>
			<input type="text" name="postnom" id="postnom" required /><br />
			<label for="prenom">Prénom : </label>
			<input type="text" name="prenom" id="prenom" required /><br />
			<label for="genre">Genre : </label>
			<select id="genre" name="genre">
				<option value="Femme">Femme</option>
				<option value="Homme">Homme</option>
			</select><br />
			<label for="dateNaissance">Date de naissance : </label>
			<input type="date" name="dateNaissance" id="dateNaissance" required /><br />
			<input type="submit" value="Valider" />
		</form>
	</body>
</html>