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
	</head>
	<body>	
		<h1>' . $title .'</h1>
		<p> da vincijev
		<a href=' . $link .'target="_blank">Wikipedija</a></p>
	</body>
</html>
';


?>