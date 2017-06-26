<?php
	//substr
	
	$a = 'Bonjour le monde';
	$b = substr($a, 3);
	echo $b;
	echo '<br />';
	$b = substr($a, 3,4);
	echo $b;
	echo '<br />';
	$b = substr($a, -5,3);
	echo $b;
	echo '<br />';
	
	//strstr
	$a = 'Bonjour le monde';
	$b = strstr($a, 'le');
	echo $b;
	echo '<br />';
	$a = 'this is this';
	$b = strstr($a, 'this');
	echo $b;
	echo '<br />';

	//strrchr
	$a = 'la mangue, la pomme, la banane';
	$b = strrchr($a, 'la');
	echo $b;
	echo '<br />';
	
	//substr_replace
	$a = 'Bonjour le monde';
	$b = substr_replace($a, 'Dia', 3);
	echo $b;
	echo '<br />';
	$b = substr_replace($a,'soir',3,4);
	echo $b;
	echo '<br />';
	
	//str_replace
	$a = 'la mangue, la pomme, la banane';
	$c = str_replace('e','es',$a);
	echo $c;
	echo '<br />';
	$c = str_replace('la','les',$c);
	echo $c;
	echo '<br />';
	
	//strlen
	$a = 'la mangue';
	$c = strlen($a);
	echo $c;
	echo '<br />';
	
	//substr_count
	$a = 'la mangue, la pomme, la banane';
	$c = substr_count($a, 'la');
	echo $c;
	echo '<br />';
	
	//substr_cmp
	$c = strcmp('la banane', 'la pomme');
	echo $c;
	$c = strcmp('zebra', 'zebre');
	echo $c;
	$c = strcmp('les enfants', 'les autres');
	echo $c;
	$c = strcmp('kawel junior', 'sanga bulda');
	$c = strcmp('sanga bulda', 'kawel junior');
	echo $c;
	echo '<br />';
	
	//strncasecmp
	$c = strcmp('la banane', 'LA BANANE');
	echo $c;
	echo '<br />';
	$c = strncasecmp('la banane', 'LA BANANE', 9);
	echo $c;
	echo '<br />';
	
	//similar_text
	$c = similar_text('la banane', 'LA BANANE');
	echo 'similar_text : '.$c;
	echo '<br />';
	$p = 0;
	$c = similar_text('la banane', 'LA BANANE', $p);
	echo 'Pourcentage de ressemblance : '.$p.'%';
	echo '<br />';
	$c = similar_text('la banane', 'la banane', $p);
	echo 'Pourcentage de ressemblance : '.$p.'%';
	echo '<br />';
	$c = similar_text('bonjour le monde', 'bonsoir les amis', $p);
	echo 'Pourcentage de ressemblance : '.$p.'%';
	echo '<br />';
	$c = similar_text('ngoy wa ilunga', 'lushule zuba', $p);
	echo 'Pourcentage de ressemblance : '.$p.'%';
	echo '<br />';
	
	//str_ireplace:Cherche "Hello word", remplace word par Maurice
	echo "<h1>str_ireplace</h1>";
	echo str_ireplace("WORLD","Maurice","Hello world!");
	
	//str_split: donne les index des lettres du mot Hello
	echo "<h1>str_split</h1>";
	print_r(str_split("Hello"));
	
	
	
?>