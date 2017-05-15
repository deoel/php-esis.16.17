
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
