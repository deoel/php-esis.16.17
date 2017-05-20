<?php
	setcookie('pays', 'USA', time() + 60*3, null, null, false, true);
	setcookie('like', 'pomme', time() + 60*3, null, null, false, true);
	setcookie('ville', 'Lubumbashi', time() + 3600, null, null, false, true);
?>

<!doctype html>
<html>
	<head>
		<title>les sessions et les cookies</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php 
			echo '<br/> Grâce <strong>aux cookies</strong>, je sais maintenant que j\'irai aux <strong>'.$_COOKIE['pays'].'</strong> le mois prochain.';
		 ?>
	</body>
</html>
