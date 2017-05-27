<?php
$pattern="#bonjour#";
$phrase="Bonjour tous le monde !";

if (preg_match($pattern, $phrase)) {
	echo 'Vrai';	
}
else
{
	echo 'faux';
}
?>