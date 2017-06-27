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
			
			<?php
				require_once('tache.class.php');
				require_once('tache.dao.php');

				
				$tdao = new TacheDAO();
				
				if(isset($_GET['id']))
				{
					$id = $_GET['id'];
					
					$tdao->delTache($id);
					header('Location: taches.php');
					
							}?>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>