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
				<a href="../modif_service.php">FR</a>
			</p>
		</header>
		<div>
			<form method="post" action="../controleur/__modif_service.php">
				<fieldset>
					<legend>Editing a service</legend>
					<?php
						if(isset($_GET['id']) and !empty($_GET['id'])) {
							echo '<input type="hidden" name="id" value="'.$_GET['id'].'">';
						} else {
							header('Location: index.php');
						}
					?>
					<label for="intitule">Title : </label>
					<input type="text" name="intitule" id="intitule" required /><br />
					<label for="description">Description : </label>
					<input type="text" name="description" id="description" required /><br />
					<input type="submit" value="Save changes" />
				</fieldset>
			</form>
		</div>
		<?php include_once('../foot.php'); ?>
	</body>
</html>