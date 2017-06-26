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
			<h2>Attrubuer la tache a un autre agent</h2>
			<form method="post" action="__changer_tache.php">
				<?php
					echo '<input type="hidden" name="id" value="'.$_GET['id'].'" />';
				?>
				
				<label for="idfonction">Agent :</label>
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
				<input type="submit" value="Changer" />
			</form>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>