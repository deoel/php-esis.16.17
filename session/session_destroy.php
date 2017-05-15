<?php

	session_start();
	
	session_destroy();
	echo 'Vous vous êtes deconnecté avec succès';
	
	$_SESSION['pseudo'] = 'Dimokeur';

?>