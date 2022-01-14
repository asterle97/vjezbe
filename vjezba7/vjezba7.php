<?php
print'
<!DOCTYPE HTML>
<html>
	<head>
		<title>Kolokvij</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Ante Šterle">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class=uredi>
			<form action="" method="get">
                <label>Ocjena za prvi kolokvij:</label>
                <input type="number" name="kol1" max=5 min=1 required/></br>
                <label>Ocjena za drugi Kolokvij:</label>
                <input type="number" name="kol2" max=5 min=1 required/></br>
                <input type="submit" name="sbmt" value="Unesi" required/>
			</form>';
            if(isset($_GET['sbmt']))
            {
                $_kol1 = $_GET['kol1'];
                $_kol2 = $_GET['kol2'];
                if ($_kol1 < 2 || $_kol2 < 2)
                {
                    print '<h1>Konačna ocjena je negativna!</h1>';                    
                }
                else
                {
                    $prosjek = ($_kol1 + $_kol2)/2;
                    if($prosjek >= 4.5)
                    {
                        print '<h1>Prosjek je ' . $prosjek . ', a konačna ocjena je 5!</h1>';
                    }
                    else if($prosjek < 4.5 && $prosjek >= 3.5)
                    {
                        print '<h1>Prosjek je ' . $prosjek . ', a konačna ocjena je 4!</h1>';
                    }
                    else if($prosjek < 3.5 && $prosjek >= 2.5)
                    {
                        print '<h1>Prosjek je ' . $prosjek . ', a konačna ocjena je 3!</h1>';
                    }
                    else
                    {
                        print '<h1>Prosjek je ' . $prosjek . ', a konačna ocjena je 2!</h1>';
                    }
                }

            }
            print'
		</div>
		
	</body>
</html>';