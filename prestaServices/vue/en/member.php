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
				<a href="../membre.php">FR</a>
			</p>
		</header>
		<div>
			<form method="post" action="../controleur/__add_membre.php">
				<fieldset>
					<legend>Identities</legend>
					<label for="nomcomplet">Full name : </label>
					<input type="text" name="nomcomplet" id="nomcomplet" required /><br />
					<label for="genre">Gender : </label>
					<select name="genre" id="genre">
						<option value="F">Woman</option>
						<option value="M">Man</option>
					</select><br />
					<label for="tel">Phone : </label>
					<input type="text" name="tel" id="tel" required /><br />
					<label for="email">Email : </label>
					<input type="email" name="email" id="email" required /><br />
					<label for="adressephysique">Adress : </label>
					<input type="text" name="adressephysique" id="adressephysique" required /><br />
					<label for="statut">Bio : </label>
					<input type="text" name="statut" id="statut" required /><br />
					<label for="pwd">Password : </label>
					<input type="password" name="pwd" id="pwd" required /><br />
					<label for="pwdconf">Confirm your password : </label>
					<input type="password" name="pwdconf" id="pwdconf" required /><br />
					<label for="competences">Skills : </label>
					<textarea name="competences" id="competences"></textarea><br />
				</fieldset>
				<fieldset>
					<legend>Provided services</legend>
					<label for="service">Services : </label>
					<select name="service[]" id="service" multiple="multiple">
						<?php
							require_once('../modele/structure/service.class.php');
							require_once('../modele/dao/service.dao.php');
							
							$sdao = new ServiceDAO();
							$ls = $sdao->getAllService();
							
							foreach($ls as $s) {
								echo '<option value="'.$s->getId().'">'.$s->getIntitule().'</option>';
							}
						?>
					</select><br />
				</fieldset>
				<input type="submit" value="Valider" />
			</form>
		</div>
		<div>
			<?php 
				
				include_once('../controleur/__liste_membre.php');
			
			?>
		</div>
		<?php include_once('../foot.php'); ?>
	</body>
</html>