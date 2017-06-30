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
					
					if($tdao->delTache($id) === true)
					{
						echo "<p>Tache Supprimee Avec Succes</p>";
					}
					else
					{
						echo "<p>Tache Non Trouvee</p>";
					}
				}
			?>
		</div>
		
		<?php include_once('foot.php'); ?>
	</body>
</html>