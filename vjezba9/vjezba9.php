<?php

print'
<!DOCTYPE HTML>
<html>
	<head>
		<title>Ducan</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Ante Šterle">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>';    
        date_default_timezone_set('Europe/Zagreb');
        #dan u tjednu na hrvatskom
        if (date("N")==1){
            $dan_u_tjednu = "Ponedjeljak";
        }
        else if (date("N")==2){
            $dan_u_tjednu = "Utorak";
        }
        else if (date("N")==3){
            $dan_u_tjednu = "Srijeda";
        }
        else if (date("N")==4){
            $dan_u_tjednu = "Četvrtak";
        }
        else if (date("N")==5){
            $dan_u_tjednu = "Petak";
        }
        else if (date("N")==6){
            $dan_u_tjednu = "Subota";
        }
        else{
            $dan_u_tjednu = "Nedjelja";
        }
        print 'Danas je ' . date("j-n-Y G:i") . ' ' . $dan_u_tjednu . '</br>';

        if (date("N")==7){
            echo 'Zatvoreno.';
            #sve nedjelje su neradne bez obzira jeli drzavni praznik ili ne
        }
        else if (date("j-n")=="18-4"||date("j-n")=="30-5"||date("j-n")=="16-6"||date("j-n")=="22-6"||
                    date("j-n")=="5-8"||date("j-n")=="15-8"||date("j-n")=="1-11"||date("j-n")=="18-11"||date("j-n")=="26-12") {
            echo 'Zatvoreno.';
            #neradni dan je na sve drzavne praznike koji nisu u nedjelju  SAMO ZA 2022 godinu!
        }
        else if (date("N"==6)){
            if(date("G")>9 && date("G"<14)){
                echo 'Otvoreno!';
            }
            else{
                echo 'Zatvoreno.';
                #subotom ducan radi od 9 do 14 sati
            }
        }
        else{
            if(date("G">8 && date("G")<20)){
                echo 'Otvoreno!';
            }
            else {
                echo 'Zatvoreno.';
                #ostalim danima radi od 8 do 20 sati
            }
        }
        print'
    </body>
</html>';
    