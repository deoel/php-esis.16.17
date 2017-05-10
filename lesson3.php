<?php

	//count

	$a = array(
	"banane", 
	"like"=>"pomme", "orange", 
	"good"=>"citron");
	$c = array();
	$c[] = 45;
	$c[] = 854;
	$c[] = "63";
	$c[] = $a;
	$c[] = True;
	
	$b = count($c);
	
	echo '<br /> taille de $c = '.$b;
	
	//in_array
	if(in_array("pomme", $c))
		echo '<br /> la pomme existe!';
	else
		echo '<br /> Elle a mangé ça!';
	
	//array_key_exists
	if(array_key_exists("good", $a))
		echo '<br /> la clé existe!';
	else
		echo '<br /> Elle est partie avec!';
	
	//array_search
	$c = array(56,36,78,63);
	$b = array_search(63,$c);
	echo '<br /> indice = '.$b;
	
	//array_count_values
	$c = array(4,5,7,4,8,7,4,0);
	$d = array_count_values($c);
	echo '<pre>';
	print_r($d);
	echo '</pre>';
	
	//array_merge
	$a = array(4,5,8,'good');
	$b = array('nice',5,'fine');
	$c = array_merge($a,$b);
	echo '<pre>';
	print_r($c);
	echo '</pre>';
	
	$a = array('a'=>8, 'b', 'c'=>3);
	$b = array('b', 'c'=>8, 'a');
	$c = array_merge($a,$b);
	echo '<pre>';
	print_r($c);
	echo '</pre>';
	
	//array_push
	$a = array(7,8,9);
	array_push($a, 45, 74, "good");
	echo '<pre>';
	print_r($a);
	echo '</pre>';
	
	//array_pop
	$a = array(7,8,9);
	$b = array_pop($a);
	echo '<pre>';
	print_r($a);
	echo '</pre>';
	echo '<br /> b = '.$b;
	
	//array_unshift
	$a = array(7,8,9);
	array_unshift($a, 45, 74, "good");
	echo '<pre>';
	print_r($a);
	echo '</pre>';
	
	//array_shift
	$a = array(7,8,9);
	$b = array_shift($a);
	echo '<pre>';
	print_r($a);
	echo '</pre>';
	echo '<br /> b = '.$b;
	

?>