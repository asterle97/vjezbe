<?php

$_a=$_GET['brojA'];
$_b=$_GET['brojB'];

$c=((3*$_a)-$_b)/2;
print '
<!doctype html>
<html lang="hr">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="site">
		<meta name="keywords" content="site">
		<meta name="author" content="Ante Šterle">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="images/favico.png">
	</head>
	<body>	
		<p style="color:red">c = '. $c .'</p>
		
	</body>
</html>';
?>