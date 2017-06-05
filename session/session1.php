<?php //l'espace avant la balise php générait le
 //"Warning: session_start() [function.session-start]: Cannot send session cache limiter 
//- headers already sent (output started at C:\wamp\www\php-esis.16.17\Session\session1.php:2) 
//in C:\wamp\www\php-esis.16.17\Session\session1.php on line 4"
	
	session_start();

?>

<!doctype html>
<html>
	<head>
		<title>les sessions et les cookies</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h3>Get les sessions</h3>
		<strong>Pseudo :</strong> 
		<?php echo $_SESSION['pseudo']; ?> 
		<br />
		<strong>Description :</strong> 
		<?php echo $_SESSION['description']; ?> 
		<br />
		<strong>Pays :</strong> 
			<?php 
				echo $_SESSION['pays']; 
			?> 
		<br />
	</body>
</html>
