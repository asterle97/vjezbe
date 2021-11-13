<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<?php

if(isset($_GET['sbmt']))
{
	$input = $_GET['input'];
	$brojrnd = rand(1,9);
	
	if($input==$brojrnd)
	{
		echo '<h1 style="margin-top:100px; margin-left:270px">' . $input . '=' . $brojrnd . '</h1>';
		echo '<h2 style="margin-top:50px; margin-left:250px; color:green">Pogodak</h2>';
		echo '<form action="zadatak 1.html" method="post">';
		echo '<input type="submit" name="sbmt" value="pokusaj ponovno" style="background-color:#66b3ff; margin-left:50px; margin-top:100px" />';
		echo '</form>';
	}
	else
	{
		echo '<h1 style="margin-top:100px; margin-left:270px">' . $input . '!=' . $brojrnd . '</h1>';
		echo '<h2 style="margin-top:50px; margin-left:250px; color:red">Promasaj</h2>';
		echo '<form action="zadatak 1.html" method="post">';
		echo '<input type="submit" name="sbmt" value="pokusaj ponovno" style="background-color:#66b3ff; margin-left:50px; margin-top:50px" />';
		echo '</form>';
	}
	
}


?>