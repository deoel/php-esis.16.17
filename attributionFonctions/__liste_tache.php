<?php

	require_once('tache.class.php');
	require_once('tache.dao.php');

	$tdao = new TacheDAO();
	$lt = $tdao->getAllTache();
	
	echo '<table>';
	echo '
		<tr>
			<th colspan="5">LISTE DES TACHES</th>
		</tr>
		<tr>
			<th>N°</th>
			<th>DESCRIPTION</th>
			<th>MODIFIER</th>
			<th>SUPPRIMER</th>
		</tr>
	';
	$compteur = 1;
	foreach($ls as $s) {
		echo '
		<tr>
			<td>'.$compteur.'</td>
			<td>'.$t->getDescription().'</td>
			<td><a href="modif_tache.php?id='.$s->getId().'">modifier</a></td>
			<td><a href="__del_tache.php?id='.$s->getId().'">supprimer</a></td>
		</tr>
		';
		$compteur++;
	}
	echo '</table>';

?>