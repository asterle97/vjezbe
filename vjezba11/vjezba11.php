<?php

/* source: https://www.youtube.com/watch?v=hf2ehnGRx1g */

print'
<!DOCTYPE HTML>
<html>
	<head>
		<title>Prosti broj</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Ante Šterle">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div>
			<form action="" method="get">
                <label>Upisi jedan cijeli broj od 1 do 100:</label>
                <input type="number" name="broj" max=99 min=1 required/></br>
                <input type="submit" name="sbmt" value="Unesi" required/>
			</form>';
            function prostBroj($broj){
                $prime = 0;
                for($i=2;$i<=($broj/2);$i++){
                    if (($broj%$i)==0){
                        $prime++;
                        break;
                    }
                    
                }
                if($prime==0){
                    print $broj . ' je prost broj!</br>';                        
                }
                else{
                    print $broj . ' nije prost broj!</br>';
                }
            }
            if(isset($_GET['sbmt']))
            {
                $_broj = $_GET['broj'];
                prostBroj($_broj);
                                    
            }
            if(isset($_GET['sbmt']))
            {
                print'<h1>Svi prosti brojevi od 1 do 100</h1>';
                for ($x=1;$x<100;$x++){
                    $prime = 0;
                    for($i=2;$i<=($x/2);$i++){
                        if (($x%$i)==0){
                            $prime++;
                            break;
                        }
                        
                    }
                    if($prime==0){
                        print $x . ' ';                        
                    }                    
                }
                                    
            }                     
            print'
		</div>
		
	</body>
</html>';