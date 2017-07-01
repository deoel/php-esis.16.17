<!doctype>
<html>
	<head>
		<title>PrestaService</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/index.css" />
	</head>
	<body>
		<header>
			<h2>Welcome on PrestaService !</h2>
			<p>
				"Find the right person to get you a service"
			</p>
			<p>
				<a href="index.php">Home</a> |
				<a href="member.php">Memberhood</a> |
				<a href="service.php">Services</a>
				<a href="../service.php">FR</a>
			</p>
		</header>
		<div>
			<form method="post" action="../controleur/__add_service.php">
				<fieldset>
					<legend>Add a new service</legend>
					<label for="intitule">Ttile : </label>
					<input type="text" name="intitule" id="intitule" required /><br />
					<label for="description">Description : </label>
					<input type="text" name="description" id="description" required /><br />
					<input type="submit" value="Save" />
				</fieldset>
			</form>
		</div>
		<div>
			<?php 
				
				include_once('../controleur/__liste_service.php');
			
			?>
		</div>
		<?php include_once('../foot.php'); ?>
	</body>
</html>