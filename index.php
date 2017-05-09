<?php
	//echo "<em> J'aime le PHP</em>";
	
	//les variables
	
	/* $variable_test = 12;
	$a = 8;
	$b = 9;
	$c = $a + $b;
	
	$prenom = "Henock";
	$promotion = 'G2';
	
	echo "$a + $b = $c"; //Concatenation
	echo $a. "+" .$b. "=" .$c; //Concatenation
	
	//les variables dynamiques
	$p = "elie";
	$elie = 123;
	
	echo"<br/>";
	echo $p;
	echo"<br/>";
	echo $$p;
	echo"<br/>";
	echo ${$p};
	
	//le transtypage
	echo"<br/>";
	$h = "78";
	$z = 63;
	$y = (int)$h + $z;
	*/
	
	//tester les variables
	//verifier l'exixtence d'une variables
	//Verifier le typ d'une variable
	
	//fonction isset()
	echo"<br> isset: ";
	$a = 78;
	$f = isset($a);
	echo $f;
	echo"<br> isset : ";
	echo isset($u);
	
	//fonction empty()
	$u = NULL;
	echo empty($u);
	
	// fonction is_int()
	echo "<br/> is_int : ";
	echo is_int($a);
	
	//les structures conditionnelles
	
	echo "<br/> Condition : ";
	
	$age = 122;
	if ($age < 18){
		echo "Mineur!";
	} else{
		echo "Bienvenue";
	}
	
	
	$a = 12;
	$b = 5;
	
	if ($b > 3){
		$a += $b;
	} elseif ($b == 5){
		$a *= $b;
	} else{
		$a +=1;
	}
	
	//ASTUCE : le ternaire (condition en une ligne)
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>