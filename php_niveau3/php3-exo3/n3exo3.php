<?php

echo file_get_contents('text.txt');
echo "<br><br><br><br><br>";

echo "<hr>";
echo "<pre>";
print_r(file("text.txt"));
echo "<pre>";

file_exists("text.txt");//verifie si le fichier exist et retourne un boolean
fopen("text.txt", "r"); //ouvre le fichier en prenant le chemin vers le fichier et le "r" est
                        // le mode d'ouverture du fichier: r = lecture seule
                        //https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/ouvrir-lire-fermer-fichier/

?>


<?php

$ouvrFich = fopen("text.txt", "r+"); //pour l'ouvrir et le manipuler
$prendFich = fgets($ouvrFich);  //ici on pourra le manipuler une fois mis dans une variable et sur la variable qu'on va agir
$prendFich++;                    //on incremente la valeur de la variable
fseek($ouvrFich,0);             //prend le variable et place le curseur au tout debut du fichier text. 0 signifiant l'emplacement
fputs($ouvrFich, $prendFich);   //fputs remplace la valeur de $ouvrFich par celle de $prendFich
echo $prendFich;                //on l'affiche... incrementation est faite dans le fichier est dans la page


//https://www.youtube.com/watch?v=rvA0Gj3pvR4 
?>