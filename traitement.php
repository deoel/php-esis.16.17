<!doctype html>
<html>
	<head>
		<title>Traitement</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Je traite bien les données</h1>
		<!--p>
			Bonjour <?php echo $_GET['prenom']; ?> <br />
			Ton age est de <?php echo $_GET['age'] + 2; ?>
		</p-->
		
		<p>
			<strong>Nom : </strong> <?php echo $_POST['nom']; ?> <br />
			<strong>Postnom : </strong> <?php echo $_POST['postnom']; ?> <br />
			<strong>Prénom : </strong> <?php echo $_POST['prenom']; ?>
		</p>

		<p>
			<strong>Adresse : </strong> <?php echo $_POST['adresse']; ?> <br />
			<strong>Tel : </strong> <?php echo $_POST['tel']; ?> <br />
			<strong>Mail : </strong> <?php echo $_POST['mail']; ?>
		</p>
	</body>
</html>
