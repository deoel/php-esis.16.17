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
			<h2>Attribuer une fonction à un Agent</h2>
			<form method="post" action="__add_agent.php">
				<label for="nom">Nom :</label>
				<input type="text" name="nom" id="nom" /><br />
				<label for="genre">Genre :</label>
				<select name="genre" id="genre">
					<option value="F">Femme</option>
					<option value="M">Homme</option>
				</select><br />
				<label for="tel">Téléphone :</label>
				<input type="text" name="tel" id="tel" /><br />
				<label for="email">Email :</label>
				<input type="email" name="email" id="email" /><br />
				<label for="idfonction">Fonction :</label>
				<select name="idfonction" id="idfonction">
				
				<?php 
					require_once('fonction.class.php');
					require_once('fonction.dao.php');
					
					$fdao = new FonctionDAO();
					$lf = $fdao->getAllFonction();
					
					foreach($lf as $f) {
						echo '
							<option value="'.$f->getId().'">'.$f->getIntitule().'</option>
						';
					}
				
				?>
				
				</select><br />
				<input type="submit" value="Enregistrer" />
			</form>
		</div>
		<div>
			<h2>Liste des agents et leurs fonctions</h2>
			<?php
				require_once('fonction.class.php');
				require_once('fonction.dao.php');
				require_once('tache.dao.php');
				require_once('agent.class.php');
				require_once('agent.dao.php');
				
				$fdao = new FonctionDAO();
				$lf = $fdao->getAllFonction();
				$adao = new AgentDAO();
				$la = $adao->getAllAgent();
				
				echo '<table>';
				echo '
					<tr>
						<th>N°</th>
						<th>NOM</th>
						<th>GENRE</th>
						<th>TEL</th>
						<th>EMAIL</th>
						<th>FONCTION</th>
						<th>NBRE DE TÂCHES</th>
						<th>CHANGER LA FONCTION</th>
					</tr>
				';
				$compteur = 1;
				$task=new TacheDAO();
				foreach($la as $a) {
					echo '<tr>
							<td>'.$compteur.'</td>
							<td>'.$a->getNom().'</td>
							<td>'.$a->getGenre().'</td>
							<td>'.$a->getTel().'</td>
							<td>'.$a->getEmail().'</td>
						';
						
					foreach($lf as $f) {
						if($a->getIdfonction() == $f->getId()) {
							echo '
								<td>'.$f->getIntitule().'</td>
							';
							break;
						}
					}
					echo '<td>'.$task->getNombreTache($a->getId()).'</td>';
					echo '<td><a href="changer_fonction.php?id='.$a->getId().'&nom='.$a->getNom().'"><img src="change.jpg" alt="change" width="30px;" /></a></td>';
					echo '</tr>';
					$compteur++;
				}
				echo '</table>';
			?>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>