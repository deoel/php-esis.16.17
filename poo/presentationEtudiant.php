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
		<style>
			label {
				display: inline-block;
				width: 200px;
			}
		</style>
	</head>
	<body>
		<h1>Présentation des étudiants</h1>
		<?php
			
			require_once('etudiant.class.php');
			
			if(isset($_POST['nom'], $_POST['postnom'], $_POST['prenom'], $_POST['genre'], $_POST['dateNaissance'])) {
				
				$etu = new Etudiant($_POST['nom'], $_POST['postnom'],$_POST['prenom'],$_POST['genre'],$_POST['dateNaissance']);
				$s = serialize($etu);
				
				$_SESSION['etudiant'][] = $s;
				foreach($_SESSION['etudiant'] as $e) {
					$t = unserialize($e);
					echo '<p>';
					$t->presentation();
					echo '</p>';
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