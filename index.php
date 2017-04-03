<?php 

	//echo "<em>J'aime le PHP</em>";

	//les variables
	
	$nom_variable = 12;
	$a = 8;
	$b = 9;
	$c = $a + $b;
	
	$prenom = "Henock";
	$promotion = 'G2';
	
	$c = 'Bonjour le monde';
	$c = true;
	//echo $c;
	//echo $nom;
	//secho $promotion;
	
	// int : 
	// string :
	// float :
	// boolean
	
	
	$a = 7;
	$b = "PHP";
	$c = 78.3;
	$r = false;
	
	
	$h = NULL;
	
	//concatenation
	
	$a = 7;
	$b = 5;
	$c = $a + $b;
	
	echo "$a + $b = $c <br />"; 
	echo $a." + ".$b." = ".$c;
	
	// +, -, *, /, %
	
	//les variables dynamiques
	
	$p = "elie";
	$elie = 123;
	
	echo "<br />";
	echo $p;
	echo "<br />";
	echo $$p;
	echo "<br />";
	echo ${$p};
	
	//le transtypage
	echo "<br />";
	$h = "78";
	$z = 63;
	$y = (int)$h + $z;
	
	echo $h.' + '.$z.' = '.$y;
	
	
	// tester les variables :
	// verifier si une variable existe
	// vérifier le type de la variable
	
	// fonction isset()
	
	echo "<br /> isset : ";
	$a = 78;
	$f = isset($a);
	echo $f;
	echo "<br /> isset : ";
	echo isset($u);
	
	// fonction empty()
	echo "<br /> empty : ";
	$u = NULL;
	echo empty($u);
	
	// fonction is_ :
	// fonction is_int()
	echo "<br /> is_int : ";
	$a = 7;
	echo is_int($a);
	
	
	
	// en résumé :
	
	/*
	
		une varialbe en php est typée
		commence toujours le signe $
		verifier l'existence d'une variable
		verifier le type d'une variable
		construire des variables dynamiques
		
		
	*/
	
	$a = 8; $b = 9; $c = $a + $b;
	
	//les structures conditionnelles
	
	
	echo "<br /> condition : ";
	
	$age = 12;
	if ($age < 18) {
		echo "Tu es trop petit!";
	} elseif($age >= 18 AND $age <=30) {
		echo "Bon, tu es reçu!";
	}
	
	//les operateurs de comparaison
	/*
		<
		>
		<=
		>=
		!=
		==
		
	*/
	//les operateurs logiques
	/*
		AND  ou &&
		OR ou ||
		
	
	*/
	
	$a = 12;
	$b = 6;
	
	if ($b == 3) {
		$a += $b;
	} elseif ($b == 5) {
		$a *= $b;
	} else {
		$a /= $b;
	}
	
	
	switch($b) {
		case 3:
			$a += $b;
			break;
		case 5:
			$a += $b;
			break;
		default:
			$a += $b;
			break;
	}
	
	// une astuce : le ternaire
	
	$a = 8;
	if ($a > 10) {
		$a = $a * 2;
	} else {
		$a = $a * 3;
	}
	
	$a = ($a > 10) ? ($a * 2) : ($a * 3);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>