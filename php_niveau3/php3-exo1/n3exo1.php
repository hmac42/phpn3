<?php
//setcookie('user','Miguel',time()+60*60*24);
//setcookie('temps',date('d-m-Y h:i:s'));

 //setcookie ( string $name [, string $value = "" [, int $expires = 0 [, string $path = "" [, string $domain = "" [, bool $secure = FALSE [, bool $httponly = FALSE ]]]]]] ) : bool

if(isset($_COOKIE['temps'])){
    $visite = $_COOKIE['temps']."*".date('d-m-Y h:i:s');//
    setcookie('temps',$visite);
    echo $visite;}
    
else{setcookie('temps',date('d-m-Y h:i:s'));
    }
echo "<ul>Vous avez consulté cette page ".$_COOKIE['visite']." fois :</ul>";

$nmrVisite =  $_COOKIE['temps'];
    for($i=0;$i<=count($i);$i++){
    echo "<li>".$nmrVisite[$i]."</li>";}
        
    





?>