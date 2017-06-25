<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php include_once('head.php'); ?>
	<div>
		<h2>Changer une tâche à affecter à un Agent</h2>
		<form method="post" action="__modif_tache.php">
			<?php
				if (isset($_GET['id']) and ! empty($_GET['id'])) {
            echo '<input type="hidden" name="id" value="' . $_GET['id'] . '">';
        } else {
            header('Location: index.php');
        }
			?>
			<label for="description">Description :</label>
			<input type="text" name="description" id="description" /><br />
			<label for="datedebut">Date début :</label>
			<input type="date" name="datedebut" id="datedebut" /><br />
			<label for="datefin">Date fin :</label>
			<input type="date" name="datefin" id="datefin" /><br />
			<label for="idagent">Agent :</label>
			<select name="idagent" id="idagent">
			
			<?php 
				require_once('agent.class.php');
				require_once('agent.dao.php');
				
				$adao = new AgentDAO();
				$la = $adao->getAllAgent();
				
				foreach($la as $a) {
					echo '
						<option value="'.$a->getId().'">'.$a->getNom().'</option>
					';
				}
			
			?>
			
			</select><br />
			<input type="submit" value="Modifier" />
		</form>
	</div>
	<?php 
		if (isset($_GET['id']) and !empty($_GET['id'])) {
			
			
		}else{
			echo 'error';
		}
	 ?>
	 <?php include_once('foot.php'); ?>
</body>
</html>