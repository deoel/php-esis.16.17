<!doctype html>
<html>
	<head>
		<title>Traitement</title>
		<meta charset = "utf-8"/>
	</head>
	<body>
		<h1>Ceci est notre page de traitement</h1>
		<!--p><p>
			Bonjour <?php echo $_GET['prenom'];?>
		</p>
		<p>
			Votre age est de :  <?php echo $_GET['age'];?>
		</p></p-->
		
		<p>
			<strong>Nom : </strong><?php echo $_POST['nom']; ?><br/>
			<strong>Postom : </strong><?php echo $_POST['postnom']; ?><br/>
			<strong>Prenom : </strong><?php echo $_POST['prenom']; ?><br/>
		</p>
	</body>


</html>