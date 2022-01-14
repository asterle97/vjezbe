<?php

if(isset($_GET['sbmt']))
{
	$_broj1 = $_GET['broj1'];
	$_broj2 = $_GET['broj2'];
	$_dropdown = $_GET['dropdown'];
	
	switch ($_dropdown) 
	{
		case 0:
		case 1: echo '<h1 style="margin-top:200px; margin-left:100px">Zbroj brojeva je ' . ($_broj1+$_broj2) . '</h1>';
				echo '<form action="zadatak2.html" method="post">';
				echo '<input type="submit" name="sbmt" value="novi brojevi" style="margin-left:50px; margin-top:50px" />';
				echo '</form>';
				break;
		case 2: echo '<h1 style="margin-top:200px; margin-left:100px">Razlika brojeva je ' . ($_broj1-$_broj2) . '</h1>';
				echo '<form action="zadatak2.html" method="post">';
				echo '<input type="submit" name="sbmt" value="novi brojevi" style="margin-left:50px; margin-top:50px" />';
				echo '</form>';
				break;
		case 3: echo '<h1 style="margin-top:200px; margin-left:100px">Umnožak brojeva je ' . ($_broj1*$_broj2) . '</h1>';
				echo '<form action="zadatak2.html" method="post">';
				echo '<input type="submit" name="sbmt" value="novi brojevi" style="margin-left:50px; margin-top:50px" />';
				echo '</form>';
				break;
		case 4: echo '<h1 style="margin-top:200px; margin-left:100px">Količnik brojeva je ' . ($_broj1/$_broj2) . '</h1>';
				echo '<form action="zadatak2.html" method="post">';
				echo '<input type="submit" name="sbmt" value="novi brojevi" style="margin-left:50px; margin-top:50px" />';
				echo '</form>';
				break;
	}
}


?>