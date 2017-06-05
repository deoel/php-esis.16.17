
<?php
	
	session_start();

?>

<!doctype html>
<html>
	<head>
		<title>les sessions et les cookies</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<strong>Définir les sessions</strong>
		<?php
			//créer des valeurs de session 
			
			$_SESSION['pseudo'] = '23037' ;
			$_SESSION['description'] = 'Développeur' ;
			$_SESSION['pays'] = 'RDC' ;
			
		?>
		<br/>
		<a href="session/session1.php">Session</a>
	</body>
</html>