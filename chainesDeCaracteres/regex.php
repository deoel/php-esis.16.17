<?php

	$a = 'Elle aime les bananes';
	$b = preg_match('#banane#', $a);
	echo $b;
	echo '<br />';
	
	//les symboles :
	//debut
	
	$a = 'Elle aime les bananes';
	$b = preg_match('#^banane#', $a);
	echo $b;
	echo '<br />';
	$a = 'Elle aime les bananes';
	$b = preg_match('#^Elle#', $a);
	echo $b;
	echo '<br />';
	
	//fin
	
	$a = 'Elle aime les bananes';
	$b = preg_match('#banane$#', $a);
	echo $b;
	echo '<br />';
	$a = 'Elle aime les bananes';
	$b = preg_match('#bananes$#', $a);
	echo $b;
	echo '<br />';
	$b = preg_match('#^bananes$#', $a);
	echo $b;
	echo '<br />';
	
	//Ou
	$a = 'Bonjour le monde';
	$b = preg_match('#^Bonjour|Bonsoir#', $a);
	echo $b;
	echo '<br />';
	
	// []
	$a = 'Nous avons 536 points';
	$b = preg_match('#[256]#', $a);
	echo $b;
	echo '<br />';
	
	$a = 'Nous avons 536 points';
	$b = preg_match('#[0-9]#', $a);
	echo $b;
	echo '<br />';
	
	$a = 'Nous avons 536 points';
	$b = preg_match('#^[0-9]#', $a);
	echo $b;
	echo '<br />';
	
	$a = 'Nous avons 536 points';
	$b = preg_match('#^[a-zA-Z0-9]#', $a);
	echo $b;
	echo '<br />';
	
	//Exclusion des classes
	$a = 'Bonjour le monde';
	$b = preg_match('#[^0-9]$#', $a);
	echo 'exclusion '.$b;
	echo '<br />';
	
	$a = '2 fois Bonjour le monde';
	$b = preg_match('#^[^0-9]#', $a);
	echo 'exclusion '.$b;
	echo '<br />';
	
	//le point 
	
	$a = 'ab';
	$b = preg_match('#^a.b$#', $a);
	echo 'point '.$b;
	echo '<br />';
	
	$a = 'apb';
	$b = preg_match('#^a.b$#', $a);
	echo 'point '.$b;
	echo '<br />';
	
	$a = 'apomaeb';
	$b = preg_match('#a.b$#', $a);
	echo 'point '.$b;
	echo '<br />';
	
	//le point ?
	$a = 'ab';
	$b = preg_match('#^a?b$#', $a);
	echo 'point '.$b;
	echo '<br/>';
	
	//le +
	$a = 'ab';
	$b = preg_match('#^a+b#', $a);
	echo 'point '.$b;
	echo '<br />';
	
	$a = 'aaaab les monde';
	$b = preg_match('#^a+b#', $a);
	echo 'point '.$b;
	echo '<br />';
	
	
	//le *
	$a = 'aab';
	$b = preg_match('#^a*b#', $a);
	echo 'point '.$b;
	echo '<br />';
	
	$a = 'bcfgd';
	$b = preg_match('#^a*b#', $a);
	echo 'point '.$b;
	echo '<br />';
	
	// {}
	$a = 'aab';
	$b = preg_match('#^a{2}b#', $a);
	echo 'point '.$b;
	echo '<br />';
	
	$a = 'aaab';
	$b = preg_match('#^a{2}b#', $a);
	echo 'point '.$b;
	echo '<br />';
	
	$a = 'aaab';
	$b = preg_match('#^a{2,5}b#', $a);
	echo 'point '.$b;
	echo '<br />';

	$a = 'aaab';
	$b = preg_match('#^a{2,}b#', $a);
	echo 'point '.$b;
	echo '<br />';

	//numéro de téléphone
	
	$num = '+243973686603';
	$v = preg_match('#^\+243|0[89][12459][0-9]{7}#', $num);
	echo 'numéro : '.$v;
	echo '<br />';
?>
