<?php

$title = "Da Vincijev kod";
$link = 'https://hr.wikipedia.org/wiki/Da_Vincijev_kod';

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
		<h1>';
		print $title;
		print '</h1>
		<p>Da Vincijev kod je kriminalisticki triler americkog pisca Dana Browna<br>
		<a href=';
		print $link; 
		print 'target="_blank">Wikipedija</a></p>
	</body>
</html>
';

//zadatak.php



?>