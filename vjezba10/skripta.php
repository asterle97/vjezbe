<?php

if(isset($_GET['sbmt']))
{
	$input = $_GET['rec'];
	$brojrjeci = str_word_count($input);
	
	echo $input . " Recenica ima " . $brojrjeci . " rijeci.";
	
	
}


?>