<?php
$nomC = $_POST["NomComplet"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$adresse = $_POST["adresse"];
$codP = $_POST["codePostal"];
$champErr = "Le champ est vide";
$nr = "06";
$nr1 = "05";

if (isset($email)) {
    if (empty($email)) {
        echo $champErr;
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email non valide";
    } else {
        echo ":)";
    }
}

if (isset($tel)) {
    if (empty($tel)) {
        echo $champErr;
    } elseif (substr($tel, 0, 2) != ($nr && $nr1)) {
        echo "Téléphone non valide";
    } else {
        echo ":)";
    }
}

if (isset($codP)) {
    if (empty($codP)) {
        echo $champErr;
    } elseif (strlen($codP) != 5) {
        echo "Code Postal non valide";
    } else {
        echo ":)";
    }
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="n3exo4page1.php" method="post">
        <h4>Nom complet du client:</h4>
        <input type="text" name="NomComplet" id=""><br>
        <?php  
        
        
        ?>
        <hr>
        <h4>eMail:</h4>
        <input type="email" name="email" id=""><br>
        <?php
        if (isset($email)) {
            if (empty($email)) {
                echo $champErr;
            } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email non valide";
            } else {
                echo ":)";
            }
        }
        ?>
        <hr>
        <h4>Téléphone:</h4>
        <input type="number" name="tel" id=""><br>
        <hr>
        <h4>Adresse:</h4>
        <input type="text" name="adresse" id=""><br>
        <hr>
        <h4>Code Postal:</h4><br>
        <input type="number" name="codePostal" id=""><br>
        <hr>
        <input type="submit" name="valider" value="Inscription">
    </form>

</body>

</html>