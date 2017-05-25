<?php 
	
	//test2
	
	/*
	if(isset($_POST['a']) and isset($_POST['b'])) {
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $a + $b;
		
		if($c == 3) {
			echo $a.' + '.$b.' = '.$c;
		} else {
			echo $a.' + '.$b.' = '.$c;
		}
	}*/
	
	//test3
	
	/*function tintin($a) {
		$c = array();
		foreach ($a as $b) {
			$c[] = $a[$b];
		}
		return $c;
	}

	$d = array(5,3,4,1,0,2);
	$s = tintin($d);
	
	echo "<pre>";
	print_r($s);
	echo "</pre>";*/
	

	//test3
	
	/*function milou($a) {
		return array_reverse($a);
	}

	$d = array(5,3,4,1,0,2);
	$s = milou($d);
	$l = array_flip($s);
	
	echo "<pre>";
	print_r($s);
	print_r($l);
	echo "</pre>";*/
	
	//test5
	/*function milou($a) {
		$c = array();
		foreach ($a as $b => $d) {
			if($b % 2 == 0) {
				array_unshift($c,$d);
			}
		}
		return $c;
	}

	$d = array(5,3,4,1,0,2);
	$s = milou($d); // [0,4,5]
	echo "<pre>";
	print_r($s);
	echo "</pre>";*/
	session_start();
	
	if(isset($_POST['age1'], $_POST['age2'], $_POST['age3'])) {
		if(!empty($_POST['age1']) and !empty($_POST['age2']) and !empty($_POST['age2'])) {
			$age = array();
			$age[] = $_POST['age1'];
			$age[] = $_POST['age2'];
			$age[] = $_POST['age3'];
			$s = 0;
			foreach($age as $a)
			{
				$s += $a;
			}
			$_SESSION['ageMoyen'] = $s / count($age);
		}
	}

	
	
?>
