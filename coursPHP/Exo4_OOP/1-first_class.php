<?php

class Personnage {
    public $nom = "Cloud"; // attributs
    public $img = "player_h.jpg";
    public $age = 22;
    public $sexe = true;
    public $pm = 80;
    public $pv = 75;

}
    include("common/header.php");
    include("common/menu1.php");
?>

<h2>Personnage : </h2>

<?php
    $p1 = new Personnage();
    echo "Nom : ". $p1->nom . "<br/>"; //afficher informations
    echo "Age : ". $p1->age . "<br/>";
    $p2 = new Personnage();
    $p2->nom = "Yuna";
    $p2->age = 21;
    echo "Nom : ". $p2->nom . "<br/>";
    echo "Age : ". $p2->age . "<br/>";
?>

<?php
    include("common/footer.php");
?>