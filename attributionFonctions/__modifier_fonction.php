
<?php

	require_once('fonction.class.php');
	require_once('fonction.dao.php');

	if(isset($_POST['id'],$_POST['intitule'],$_POST['description']) and !empty($_POST['id'])and !empty($_POST['intitule']) and !empty($_POST['description']))
	{
		$f = new Fonction($_POST['id'], $_POST['intitule'], $_POST['description']);
		$fdao = new FonctionDAO();
		$lf = $fdao->getAllFonction();

		$find = false;
		foreach($lf as $fe) {
			if($fe->getIntitule() == $f->getIntitule()){
				$find = true;
				break;
			} 
		}
		if(!$find) {
			$fdao->Modifier($f);
		}
		
		header('Location: fonctions.php');	
	} 

?>
