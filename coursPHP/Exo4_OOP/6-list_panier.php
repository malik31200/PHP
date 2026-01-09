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

    $paniers = [$panier1, $panier2];
    echo '<form action="#" method = "POST" >';
        echo '<label for="panier"> Panier : </label>';
        echo '<select name="panier", id="panier" onchange="submit()">';
        echo "<option value=''></option>";
        foreach($paniers as $panier){
            echo "<option value='".$panier->getIdentifiant()."'>Panier ".$panier->getIdentifiant()."</option>";
        }
        echo "</select>";
        echo "</form>";

        if(isset($_POST['panier'])){
            $panierAAfficher = getPanierById((int)$_POST['panier']);
            echo "<h2>Affichage du panier ".$_POST['panier'] ."</h2>";
            echo $panierAAfficher;
        }

        function getPanierById($id){
            global $paniers;
            foreach($paniers as $panier){
                if($panier->getIdentifiant() === $id){
                    return $panier;
                }
            }
        }
?>

<?php
    include("common/footer.php");
?>