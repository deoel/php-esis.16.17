<!doctype>
<html>
	<head>
		<title>Journal d'un étudiant</title>
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

		if(isset($_POST['id'],$_POST['nomEtudiant'], $_POST['promotion'], 
			$_POST['intituleCoursVu'], $_POST['appreciation'])) {
			
			$req = $bdd->prepare("UPDATE journal SET nomEtudiant = :nomEtudiant,
			promotion = :promotion, intituleCoursVu = :intituleCoursVu,
			appreciation = :appreciation WHERE id = :id");
			
			$req->execute(array(
				'nomEtudiant' => $_POST['nomEtudiant'],
				'promotion' => $_POST['promotion'],
				'intituleCoursVu' => $_POST['intituleCoursVu'],
				'appreciation' => $_POST['appreciation'],
				'id' => $_POST['id']
			));
			
			header('Location: data1.php');
		}			
	?>
		<h1>Modifier le journal de l'étudiant N° 
			<?php 
				if(isset($_GET['id'])) echo $_GET['id'];?>
		</h1>
		<form method="post" action="modifjournal.php">
			<?php
				if(isset($_GET['id']))
				echo '
					<input type="hidden" name="id" value="'.$_GET['id'].'" />
				';
			?>
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
		
		
		
	</body>
</html>

