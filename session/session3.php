
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
		<strong>Pays : </strong><?php echo $_SESSION['pays']; ?>
		<strong>Age : </strong><?php echo $_SESSION['age']; ?>
	</body>
</html>
