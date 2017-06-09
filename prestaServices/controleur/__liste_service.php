<?php

	require_once('../modele/structure/service.class.php');
	require_once('../modele/dao/service.dao.php');

	$sdao = new ServiceDAO();
	$ls = $sdao->getAllService();
	
	echo '<table>';
	echo '
		<tr>
			<th colspan="5">LISTE DES SERVICES</th>
		</tr>
		<tr>
			<th>N°</th>
			<th>INTITULE</th>
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
			<td>'.$s->getIntitule().'</td>
			<td>'.$s->getDescription().'</td>
			<td><a href="modif_service.php?id='.$s->getId().'">modifier</a></td>
			<td><a href="../controleur/__del_service.php?id='.$s->getId().'">supprimer</a></td>
		</tr>
		';
		$compteur++;
	}
	echo '</table>';

?>