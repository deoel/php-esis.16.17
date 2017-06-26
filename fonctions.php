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
			<h2>Créer une nouvelle Fonction</h2>
			<form method="post" action="__add_fonction.php">
				<label for="intitule">Intitulé :</label>
				<input type="text" name="intitule" id="intitule" required /><br />
				<label for="description">Description :</label>
				<input type="text" name="description" id="description" required /><br />
				<input type="submit" value="Enregistrer" />
			</form>
		</div>
		<div>
			<h2>Liste des fonctions</h2>
			<?php
				require_once('fonction.class.php');
				require_once('fonction.dao.php');
				require_once('agent.class.php');
				require_once('agent.dao.php');
				
				$fdao = new FonctionDAO();
				$lf = $fdao->getAllFonction();
				
				$adao = new AgentDAO();
				
				echo '<table>';
				echo '
					<tr>
						<th>N°</th>
						<th class="intitule">INTITULE</th>
						<th>DESCRIPTION</th>
						<th>FEMME</th>
						<th>HOMME</th>
						<th>TOTAL</th>
					</tr>
				';
				$compteur = 1;
				foreach($lf as $f) {
					echo '<tr>
							<td>'.$compteur.'</td>
							<td>
								<a href="agents.php?id='.$f->getId().'">'.$f->getIntitule().'</a>
							</td>
							<td>'.$f->getDescription().'</td>
							<td></td>
							<td></td>
							<td>'.$adao->getNombreAgent($f->getId()).'</td>
						</tr>';
					$compteur++;
				}
				echo '</table>';
			?>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>