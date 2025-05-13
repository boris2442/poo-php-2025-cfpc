<?php

require_once "Class/Employer.php";
$employer1 = new Employer("Boris", "Tsebo", 16);
$employer2 = new Employer("Coding", "sp", 16);
$employer3 = new Employer("Chillo", "Pablo", 20);
$employer1->presentation();
$employer2->presentation();
$employer3->presentation();

























$nom1 = "Boris";
$prenom1 = "Aubin";
$age1 = 17;


$nom2 = "Westlife";
$prenom2 = "coding";
$age2 = 18;

function presentation2(
    $nom,
    $prenom,
    $age
) {
    var_dump("Bonjour mon nom est <b> $nom</b>, et mon prenom est <b>$prenom </b>et mon age est <b>$age</b>");
}
presentation2($nom1, $prenom1, $age1);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> poo-2025</title>
    <style>
        *,
        ::after,
        ::before {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: monospace;
        }
    </style>
</head>

<body>
    <!-- <h1>Initialisation a la programmation oriente objet (POO) en php</h1> -->
</body>

</html>