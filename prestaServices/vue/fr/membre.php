<!doctype>
<html>
	<head>
		<title>PrestaService</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/index.css" />
	</head>
	<body>
		<header>
			<h2>Bienvenue sur PrestaService</h2>
			<p>
				"Trouver la personne qu'il vous faut pour vous rendre un service"
			</p>
			<p>
				<a href="index.php">Home</a> |
				<a href="membre.php">Membre</a> |
				<a href="service.php">Services</a>
				<a href="../en/member.php">EN</a>
			</p>
		</header>
		<div>
			<form method="post" action="../controleur/__add_membre.php">
				<fieldset>
					<legend>Identités</legend>
					<label for="nomcomplet">Nom complet : </label>
					<input type="text" name="nomcomplet" id="nomcomplet" required /><br />
					<label for="genre">Genre : </label>
					<select name="genre" id="genre">
						<option value="F">Femme</option>
						<option value="M">Homme</option>
					</select><br />
					<label for="tel">Téléphone : </label>
					<input type="text" name="tel" id="tel" required /><br />
					<label for="email">Email : </label>
					<input type="email" name="email" id="email" required /><br />
					<label for="adressephysique">Adresse : </label>
					<input type="text" name="adressephysique" id="adressephysique" required /><br />
					<label for="statut">Statut : </label>
					<input type="text" name="statut" id="statut" required /><br />
					<label for="pwd">Mot de passe : </label>
					<input type="password" name="pwd" id="pwd" required /><br />
					<label for="pwdconf">Confirmer mot de passe : </label>
					<input type="password" name="pwdconf" id="pwdconf" required /><br />
					<label for="competences">Competences : </label>
					<textarea name="competences" id="competences"></textarea><br />
				</fieldset>
				<fieldset>
					<legend>Services prestés</legend>
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