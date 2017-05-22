<?php 
	$num = '0891208793';
	$numValide = preg_match('#(\+243|0)(81|82|84|85|89|97|99|90)([0-9]{7})$#', $num);
	echo $num;
	if(numValide){
		echo ' is a good phone number';
	}else{
		echo " is a bad phone number";
	}
 ?>