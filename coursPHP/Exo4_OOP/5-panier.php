<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("classes/fruits_class.php");
require_once("classes/panier_class.php");
include("common/header.php");
include("common/menu1.php");
?>

<h2>Panier : </h2>

<?php
    $pomme1 = new Fruit(Fruit::POMME, 150);
    $pomme2 = new Fruit(Fruit::POMME, 100);
    $pomme3 = new Fruit(Fruit::POMME, 120);
    $cerise1 = new Fruit(Fruit::CERISE, 120);
    $cerise2 = new Fruit(Fruit::CERISE, 500);
    $cerise3 = new Fruit(Fruit::CERISE, 200);
    $banane1 = new Fruit(Fruit::BANANE, 400);
    $banane2 = new Fruit(Fruit::BANANE, 300);
    $banane3 = new Fruit(Fruit::BANANE, 600);

    $panier1 = new Panier();
    $panier1->addFruit($pomme1);
    $panier1->addFruit($cerise1);
    $panier1->addFruit($banane2);
    
    $panier2 = new Panier();
    $panier2->addFruit($pomme1);
    $panier2->addFruit($cerise3);
    $panier2->addFruit($banane1);

    echo $panier1;
    echo"<br/>";
    echo $panier2;
    // $fruits = [$pomme1, $pomme2, $pomme3, $cerise1, $cerise2, $cerise3, $banane1, $banane2, $banane3];

    // foreach($fruits as $fruit){
    //     echo $fruit;
    //     echo "<br/>--------------------------------<br/>";
    // }
?>

<?php
    include("common/footer.php");
?>