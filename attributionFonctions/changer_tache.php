<!doctype>
<html>
	<head>
		<title>Attribution des fonctions</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<?php include_once('head.php'); ?>
		
		<div>
			<h2>Changer une tâche de l Agent</h2>
			<form method="post" action="__modif_tache.php">
				<?php
					require_once('agent.dao.php');
					require_once 'tache.dao.php';

						if(isset($_GET['id']) and !empty($_GET['id'])) {
							echo '<input type="hidden" name="id" value="'.$_GET['id'].'">';
							$t=new TacheDAO();
							$adao = new AgentDAO();
							$id=$t->getOneAgent($_GET['id']);
							$nom=$adao->getOneAgent($id);
						} else {
							header('Location: taches.php');
						}
					?>
				<label for="description">Description :</label>
				<input type="text" name="description" id="description" /><br />
				<label for="datedebut">Date début :</label>
				<input type="date" name="datedebut" id="datedebut" /><br />
				<label for="datefin">Date fin :</label>
				<input type="date" name="datefin" id="datefin" /><br />
				<label for="idagent">Agent :</label>		
				<?php
					echo '<input id="idagent" value="'.$nom. '">';	
				
				?>
						<input type="hidden" name="idag" value=<?php echo $id; ?> />
				
				
				<br><hr><input type="submit" value="Modifier" />
			</form>
		</div>
	</body>
</<html>
