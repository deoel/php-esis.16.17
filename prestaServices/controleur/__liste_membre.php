<?php

	require_once('../modele/structure/service.class.php');
	require_once('../modele/dao/service.dao.php');
	require_once('../modele/structure/membre.class.php');
	require_once('../modele/dao/membre.dao.php');
	require_once('../modele/structure/prestation.class.php');
	require_once('../modele/dao/prestation.dao.php');

	$sdao = new ServiceDAO();
	$ls = $sdao->getAllService();
	
	$pdao = new PrestationDAO();
	$lp = $pdao->getAllPrestation();
	
	$mdao = new MembreDAO();
	$lm = $mdao->getAllMembre();
	
	echo '<table>';
	echo '
		<tr>
			<th colspan="5">LISTE DES MEMBRES</th>
		</tr>
		<tr>
			<th>N°</th>
			<th>SERVICE</th>
			<th>NOM</th>
			<th>TEL</th>
			<th>DETAILS</th>
		</tr>
	';
	$compteur = 1;
	foreach($lp as $p) {
		echo '<tr>
				<td>'.$compteur.'</td>
			';
			
		foreach($ls as $s) {
			if($p->getIdService() == $s->getId()) {
				echo '
					<td>'.$s->getIntitule().'</td>
				';
				break;
			}
		}	
		foreach($lm as $m) {
			if($p->getIdMembre() == $m->getId()) {
				echo '
					<td>'.$m->getNomcomplet().'</td>
					<td>'.$m->getTel().'</td>
				';
				break;
			}
		}
		echo '<td><a href="details_prestation.php?id='.$p->getId().'">details</a></td>';
		echo '</tr>';
		$compteur++;
	}
	echo '</table>';

?>