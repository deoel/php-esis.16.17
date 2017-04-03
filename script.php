<!doctype html>
<html>
	<head>
		<title>Bonjour le monde</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>J'aime le PHP</h1>
		<p>
			<a href="traitement.php?prenom=Esther&age=15">Traitement</a>
		</p>
		
		<hr />
		<form method="post" action="traitement.php">
			<label for="nom">Nom : </label>
			<input type="text" id="nom" name="nom" /><br />
			<label for="postnom">Postnom : </label>
			<input type="text" id="postnom" name="postnom" /><br />
			<label for="prenom">Prénom : </label>
			<input type="text" id="prenom" name="prenom" />
			<input type="submit" value="Send" />
		</form>
	</body>
</html>