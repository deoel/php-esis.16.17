<!doctype>
<html>
	<head>
		<title>Attribution des fonctions</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<?php

			if(isset($_GET['id']) && !empty($_GET['id']))
			{
				$id=0;
				$id=$_GET['id'];
				
			}
		?>
		<?php include_once('head.php'); ?>
		<!-- On ne devrait pas avoir de formulaire dans ce fichier. Priere d'arranger ça @joelush -->
		<div>
			<h2>Attribuer une tâche à un Agent</h2>
			<form method="post" action="__changer_tache.php">
				<label for="description">Description :</label>
				<input type="text" name="description" id="description" /><br />
				<label for="datedebut">Date début :</label>
				<input type="date" name="datedebut" id="datedebut" /><br />
				<label for="datefin">Date fin :</label>
				<input type="date" name="datefin" id="datefin" /><br />	
				<input type="hidden" name="id_ag" value=<?php echo $id;?>>
				
				
				<input type="submit" value="Enregistrer" />
			</form>
		</div>
		
		
		<?php include_once('foot.php'); ?>
	</body>
</html>