<?php
	echo "Nous Somme le : ".date('d/m/y' ).'<br/>';
?>
<?php
	// declaration des variables
	

	$alpha_Maxi=array('A','B','C','D','E','F','G','H','I', 'J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$alpha_Mini=array('a','b','c','d','e','f','g','h','i', 'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
		
	/*for($i=0;$i<26;$i++)
	{
		echo "format date pour la lettre ".$alpha_Mini[$i]."==> ".$format_heure_Mini=date($alpha_Mini[$i])."<br/>";
		echo " format date pour la lettre ".$alpha_Maxi[$i]."==> ".$format_heure_Maxi=date($alpha_Maxi[$i])."<br/>";
	}*/
	$jour=30;
	$mois=06;
	$annee=1960;
	$heure=15;
	$minute=0;
	$seconde=0;
	$timestamp=mktime($heure,$minute,$seconde,$mois,$jour,$annee,-1);
	$date=date('l',$timestamp);
	switch ($date) {
		case 'Monday':
			$jour1="Lundi";
			break;
			case 'Tuesday':
			$jour1="Mardi";
			break;
			case 'Wednesday':
			$jour1="Mercredi";
			break;
			case 'Thurday':
			$jour1="Jeudi";
			break;
			case 'Friday':
			$jour1="Vendredi";
			break;
			case 'Saturday':
			$jour1="Samedi";
			break;
		default:
			$jour1="Dimanche";
			break;
	}
	echo "Cette date correspond a : ".$jour1.'<br>';
	?>
	<?php

		$dateServeur=time();
		$format=date("d/m/Y H:i:s");
		$decalageHoraire=date('O');
		echo "Voici l'heure Serveur : ".$format."<br>".$decalageHoraire.'<br>';
		$dateClient=$dateServeur+7200;
		$formatClient=date("d/m/Y H:i:s",$dateClient);
		echo"Voici l'heure Client : ". $formatClient ;





	?>
