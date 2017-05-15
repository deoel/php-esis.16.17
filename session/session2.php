
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
		<h3>Get les session : page 2</h3>
		<strong>Pseudo :</strong> 
		<?php echo $_SESSION['pseudo']; ?> 
		<br />
		<strong>Description :</strong> 
		<?php echo $_SESSION['description']; ?> 
		<br />
		
		<?php
			
			$_SESSION['age'] = 21;
			
		?>
	</body>
</html>
