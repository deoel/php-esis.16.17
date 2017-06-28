<!doctype>
<html>
	<head>
		<title>Attribution des fonctions</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<?php include_once('head.php'); ?>
		
		<div>
			<h2>Changer la fonction de l'agent : <?php echo $_GET['nom']; ?></h2>
			<form method="post" action="changer_fonction.php">
				<?php
					 
        if (isset($_GET['id']) and ! empty($_GET['id'])) {
            echo '<input type="hidden" name="id" value="' . $_GET['id'] . '">';
        } else {
            header('Location: index.php');
        }
        
				?>
				
				<label for="idfonction">Fonction :</label>
				<select name="idfonction" id="idfonction">
				
				<?php 
					require_once('fonction.class.php');
					require_once('fonction.dao.php');
					
					$fdao = new FonctionDAO();
					$lf = $fdao->getAllFonction();
					
					foreach($lf as $f) {
						echo '
							<option value="'.$f->getId().'">'.$f->getIntitule().'</option>
						';
					}
					
				
				?>
				
				</select><br />
				<input type="submit" value="Changer" />
			</form>
		</div>
			<?php 
		if (isset($_GET['id']) and !empty($_GET['id'])) {
			
			
		}else{
			echo 'error somewhere';
		}
	 ?>
	 <?php include_once('foot.php'); ?>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>
			