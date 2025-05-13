<?php
class Employer
{
    public string $nom; //declaration des variables en poo
    public string $prenom; //declaration des variables en poo
    public int $age; //declaration des variables en poo
    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    public function presentation()
    {
        echo ' <pre>';
        var_dump("Bonjour... je suis  <b>{$this->nom}</b> et mon prenom est <b>{$this->prenom}</b> and my year old is <b>{$this->age}</b>");
        echo '</pre>';
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassEmployer P00-PHP-2025</title>
</head>

<body>

    <a href="../index.php"></a>
</body>

</html>