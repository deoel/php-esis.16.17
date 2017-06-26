<?php

	session_start();
	
	session_destroy();
	
	$_SESSION['pseudo'] = 'Dimokeur';
	echo '<pre>'.print_r($_SESSION).'</pre>';
	echo '<br>Vous vous êtes deconnecté avec succès';

?>