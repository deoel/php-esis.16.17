
<!doctype html>
<html>
	<head>
		<title>les sessions et les cookies</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
		
			echo '<strong>Pays : </strong>'.$_COOKIE['pays'];
			echo '<br/><strong>Like : </strong>'.$_COOKIE['like'];
			echo '<br/><strong>Ville : </strong>',$_COOKIE['ville'];
		?>
	</body>
</html>
