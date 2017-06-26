<?php

	$fichier = fopen('test.txt', 'r+'); // Ouverture du fichier
	$data = 'Bonjour le monde!';
	//fputs($fichier, $data); //Ecrire dans le fichier
	
	$resultat = fgets($fichier);
	
	echo $resultat;
	
	fclose($fichier); // Fermeture du fichier


?>