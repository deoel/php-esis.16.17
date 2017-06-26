<?php 
	$num = '0891208793';
	$numValide = preg_match('#(\+243|0)(81|82|84|85|89|97|99|90)([0-9]{7})$#', $num);
	echo $num;
	if($numValide){
		echo ' is a good phone number';
	}else{
		echo " is a bad phone number";
	}
	
//verification d'une date 
	echo '<br>------------verification de la date---------------<br/><br/>';
$pattern="#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#";
$date='15/03/1994';
if (preg_match($pattern, $date)) {

	echo '<br/> La date '.$date.' est correcte !';
}
else 
{
	echo '<br/> La date '.$date.' est incorrecte !';
}
//recuperation de la date avec preg_replase
echo '<br>------------recuperation des elements de la chaine---------------<br/><br/>';
$annee;
$mois;
$moisEntexte;
$jour;
$annee =preg_replace($pattern, '$3', $date);
echo "l'annee est ".$annee.'<br/>';
$mois =preg_replace($pattern, '$2', $date);
switch ($mois) {
	case '01':
		# code...
	$moisEntexte='Janvier';
		break;
	case '02':
		# code...
	$moisEntexte='Fevrier';
		break;
	case '03':
		# code...
	$moisEntexte='Mars';
		break;
	case '04':
		# code...
	$moisEntexte='Avril';
		break;
	case '05':
		# code...
	$moisEntexte='Mais';
		break;
	case '06':
		# code...
	$moisEntexte='Juin';
		break;
	case '07':
		# code...
	$moisEntexte='Juillet';
		break;
	case '08':
		# code...
	$moisEntexte='Aout';
		break;
	case '09':
		# code...
	$moisEntexte='Septembre';
		break;
	case '10':
		# code...
	$moisEntexte='Octobre';
		break;
	case '11':
		# code...
	$moisEntexte='Novembre';
		break;
	case '12':
		# code...
	$moisEntexte='Decembre';
		break;
	

	
	default:
		# code...
		break;
}
echo "le mois est ".$mois.' ('.$moisEntexte.')<br/>';
$jour=preg_replace($pattern, '$1', $date);
echo "le jour est ".$jour.'<br/>';

//Verufication d'une adresse email
echo '<br>------------verification d\'une adresse email---------------<br/><br/>';
$email= 'etudiantEsis@gmail.com';
//ajout de l'option i pour rendre le pattern insensible a la case
$patt='#^[a-zA-Z0-9]{5,}@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}#i';
if (preg_match($patt, $email)) {
	echo 'L\'adresse '.$email.' est correcte <br/>';
}
else
{
	echo 'L\'adresse '.$email.' est incorrecte <br/>';
}
?>