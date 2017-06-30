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
			<h2>Liste des agents et leurs fonctions</h2>
			<?php
				require_once('fonction.class.php');
				require_once('fonction.dao.php');
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
					</tr>
				';
				$compteur = 1;
				foreach($la as $a) {
					if($a->getIdfonction() == $_GET['id']) {
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
						echo '</tr>';
						$compteur++;
					}
				}
				echo '</table>';
			?>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>