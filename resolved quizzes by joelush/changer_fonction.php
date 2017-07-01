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
			
			<form method="get" action="changer_fonction.php">
				<?php
					echo '<input type="" name="id" value="'.$_GET['id'].'" />';
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
		
		<?php include_once('foot.php'); ?>
	</body>
</html>

<?php 
	require_once('fonction.class.php');
	require_once('fonction.dao.php');
	
	$fdao = new FonctionDAO();
	$lf = $fdao->getAllFonction();
	
	try {
		
		$host='mysql:host=localhost;dbname=attribution_fonctions';
		$user = 'root';
		$pwd = '';
		$bdd = new PDO($host, $user, $pwd);
		
		
	} catch (Exception $e){
		die('Erreur : '.$e->getMessage());
	}
	if(isset($_GET['idfonction'])){	
		$req = $bdd -> prepare("UPDATE agent SET idfonction=:idfonction WHERE id=:id");
		$req -> execute(array('idfonction' => $_GET['idfonction'],
								'id' => $_GET['id']));
		header('Location: index.php');
	}
	
	
?>