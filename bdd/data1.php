<!doctype>
<html>
	<head>
		<title>Journal d'un �tudiant</title>
		<meta charset="utf-8" />
		<style>
			label {
				display: inline-block;
				width: 150px;
				vertical-align: top;
			}
			input[type="text"], textarea {
				display: inline-block;
				width: 300px;
				margin-top: 6px;
			}
			h1 {color: blue;}
			em {color: green;}
		</style>
	</head>
	<body>
		<h1>Bienvenue sur notre Journal des étudiants</h1>
		<form method="post" action="data1.php">
			<label for="nomEtudiant">Nom :</label>
			<input type="text" name="nomEtudiant" id="nomEtudiant" required /><br />
			<label for="promotion">Promotion :</label>
			<input type="text" name="promotion" id="promotion" required /><br />
			<label for="intituleCoursVu">Cours vu :</label>
			<input type="text" name="intituleCoursVu" id="intituleCoursVu" required /><br />
			<label for="appreciation">Appreciation :</label>
			<textarea id="appreciation" name="appreciation" required></textarea><br />
			<input type="submit" value="Envoyer" />
		</form><hr />
		
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

			if(isset($_POST['nomEtudiant'], $_POST['promotion'], 
				$_POST['intituleCoursVu'], $_POST['appreciation'])) {
				
				$req = $bdd->prepare("INSERT INTO journal(
				nomEtudiant, promotion, intituleCoursVu, appreciation) 
				VALUES (:nomEtudiant, :promotion, :intituleCoursVu, :appreciation)");
				
				$req->execute(array(
					'nomEtudiant' => $_POST['nomEtudiant'],
					'promotion' => $_POST['promotion'],
					'intituleCoursVu' => $_POST['intituleCoursVu'],
					'appreciation' => $_POST['appreciation']
				));
				
				echo '<em>Insertion réussie</em>';
			}			
			
			include_once('journal.php');
		?>
		
	</body>
</html>

