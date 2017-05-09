<!doctype html>
<html>
	<head>
		<title>Script</title>
		<meta charset = "utf-8"/>
	</head>
	<body>
		<h1>J'aime le PHP</h1>
		<p>
			<a href = "traitement.php?prenom=Joel&age=34">Click</a>
		</p>
		
		<hr/>
		<form method = "post" action = "traitement.php">
			<label for = "nom">Nom : </label>
			<input type = "text" id = "nom" name = "nom"/><br/>
			<label for = "postnom">Postnom : </label>
			<input type = "text" id = "postnom" name = "postnom"/><br/>
			<label for = "prenom">Prenom : </label>
			<input type = "text" id = "prenom" name = "prenom"/><br/>
			<input type = "submit" name = "btnsubmit" value ="SEND"/><br/>
		</form>
		
	</body>


</html>