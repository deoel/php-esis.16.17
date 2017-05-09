<?php

	// while
	$a = 5 ;
	$b = 3;
	while($a > $b){
		$c = $a + $b;
		echo $a. '+' .$b. '=' .$c.'<br/>';
		$a--;
	}
	
	echo 'a = '.$a;
	
	//for 
	//ATTENTION $i++ et ++$i sont absolument pareils, il n'y a pas de difference
	for ($i = 0; $i < 10; $i++){
		echo'<br/> tour no '.($i+1);
		$i++;
	}
	echo '<br/> i ='.($i);
	
	// les fonctions
	
	$d = somme(9,6);
	echo'<br/> somme: '.$d;
	
	function somme($a, $b){
		$c = $a + $b;
		return $c;
	}
	
	$d = somme(4,5);
	echo'<br/> somme: '.$d;
	
	function tintin($a){
		$c = 5;
		for ($i = 2; $i <= $a; $i++){
			echo'<br/>';
			echo $a.'-'.$c;
		}
	}
	
	function milou($b, $c, $a){
		while($b < $c){
			tintin($b > $a ? $a + 1 :$b );
			$b++;
		}
	}
	
	milou(3,5,2);
	
	//les tableaux indices
	
	$T = array();
	$T = array(7, 8, 9);
	
	echo '<br/> $T[2] = '.$T[2];
	
	$d = array();
	$d[0] = 8;
	$d[2] = 9;
	$d[1] = 10;
	
	$p = array();
	$p[3] = 7;
	$p[] = 12;
	$p[] = 16;
	$p[] = 3;
	
	echo '<pre>';
	print_r($p);
	echo '</pre>';
	
	echo '<br/>';
	
	//les tableaux associatifs
	
	$a =  array();
	$a = array("nom" =>"Lushule", "prenom" => "Joel");
	$a = array(
		'glsi' => 'darling',
		'glgst' => 'wamamu',
	);
	
	$a = array();
	$a['fruit'] = array('like'=>'pomme','mangue','orange','citron');
	$a['prix'] = 100;
	$a['shop'] = 'jambo';
	$a[] = 'joel';
	$a[true] = 'Dell';
	
	echo '<pre>';
	print_r($a);
	echo '</pre>';
	
	echo '<br/>';
	
	//parcourir le tableau
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';
	
	$a =  array (8,9,'hacker',5.3, 'john');
	$b = array(
		'a' => 'pomme',
		'b' => 'banane',
		'c' => 'raisin',
	);
	
	// recuperer les valeurs sans clefs
	foreach($a as $element){
		echo '=> '.$element.'<br/>';
	}
	
	echo '<br/>';
	foreach($b as $element){
		echo '=> '.$element.'<br/>';
	}
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';
	// recuperer les valeurs avec clefs
	foreach($a as $cle => $element){
		echo $cle.' => '.$element.'<br/>';
	}
	
	echo '<br/>';
	foreach($b as $cle => $element){
		echo $cle.' => '.$element.'<br/>';
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>