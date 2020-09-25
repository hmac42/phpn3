<?php

//https://www.php.net/manual/fr/array.sorting.php toutes les fonctions pour trier les tableux!!!!


//p1 Créer et initialiser un tableau $notes avec les valeurs suivantes :
$notes = [
    "Roger" => 12,
    "Monica" => 16,
    "Najat" => 15,
    ];
    
    var_dump ($notes);
    $a ="<hr>";
    echo $a;

    //p2 Ajouter au tableau la note 10 pour l’étudiant "Anton"
    $notes["Anton"] = 10;
    var_dump ($notes);
    echo $a;


    //p3 Supprimer la note de l’étudiante "Monica"
    
    unset($notes["Monica"]);
    print_r($notes);
    echo $a;

    //p4 Déterminer la note maximale et la note minimale du groupe


    print_r("plus grande : ".max($notes)." | ");  // prend le plus grand 
    print_r("plus petite : ".min($notes));  // prend le plus petit
    echo $a;

    //p5 Afficher le tableau après l'avoir trié par ordre alphabétique.
    //krsort($notes); // trie de facon decroissante. krsort() execute l'inverse.

    ksort($notes);
    print_r ($notes);
    echo $a;

    //p6 Classer les étudiants par ordre de mérite (notes décroissantes) et afficher le tableau.

    // Fonction de comparaison
    function cmp($a, $b) { //dans $notes on a deja deux variables, qui ne sont pas nomme. en utilisant cette fonction ils seront $a = cle et $b = valeur de cle   
        if ($a == $b) { //cette fonction attribue de nouvelles positions dans la chaine 
            return 0;   //premiere comparaison: si egal garde la positon
            
        }
        return ($a > $b) ? -1 : 1;//ici la fonction compare encore: si plus grand -1...
    }                             //le but est de classer les eleves par notes, donc compare les notes et les classe de la plus grande a la plus petite!

    uasort($notes, 'cmp');
    print_r ($notes);
    echo $a;

    //p7 Déterminer la moyenne de la classe.
    
    
    $moyenne = array_sum($notes)/count($notes);// array_sum calcule la somme des valeurs du tableau et avec 
                                                //count($notes); on prend le nombre de cles du tableau et finalement on divise les deux!!!
    
       
        print_r ($moyenne);
        echo $a;


?>