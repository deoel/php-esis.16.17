<!doctype>
<html>
	<head>
		<title>PrestaService</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/index.css" />
	</head>
	<body>
		<header>
			<h2>Bienvenue sur PrestaService</h2>
			<p>
				"Trouver la personne qu'il vous faut pour vous rendre un service"
			</p>
			<p>
				<a href="index.php">Home</a> |
				<a href="membre.php">Membre</a> |
				<a href="service.php">Services</a>
				<a href="en/modif_service.php">EN</a>
			</p>
		</header>
		<div>
			<form method="post" action="../controleur/__modif_service.php">
				<fieldset>
					<legend>Modifier le service</legend>
					<?php
						if(isset($_GET['id']) and !empty($_GET['id'])) {
							echo '<input type="hidden" name="id" value="'.$_GET['id'].'">';
						} else {
							header('Location: index.php');
						}
					?>
					<label for="intitule">Intitulé : </label>
					<input type="text" name="intitule" id="intitule" required /><br />
					<label for="description">Description : </label>
					<input type="text" name="description" id="description" required /><br />
					<input type="submit" value="Ajouter" />
				</fieldset>
			</form>
		</div>
		<?php include_once('foot.php'); ?>
	</body>
</html>