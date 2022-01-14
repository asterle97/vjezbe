<?php

if(isset($_GET['sbmt']))
{
	$_dropdown = $_GET['dropdown'];
	$_cars = array ("Audi", "BMW", "Renault", "Citroen");
	
	echo "<p> vozilo je: " . $_cars[$_dropdown] . "</p>";
	


}
?>