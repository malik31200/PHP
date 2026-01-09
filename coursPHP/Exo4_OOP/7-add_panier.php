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
    echo '<form action="#" method="POST">';
        echo '<fieldset><legend>Panier à créer : </legend>';
        echo '<label for="nb_pommes">Nombre de pommes : </label>';
        echo '<input type="number" name="nb_pommes" id="nb_pommes" required/>';
        echo '<label for="nb_cerises">Nombre de cerises : </label>';
        echo '<input type="number" name="nb_cerises" id="nb_cerises" required->';
        echo '<label for="nb_bananes">Nombre de bananes : </label>';
        echo '<input type="number" name="nb_bananes" id="nb_bananes" required->';
        echo '<input type="submit" value="Créer le panier" />';
    echo "</fieldset></form>";


    $pomme1 = new Fruit(Fruit::POMME, 160);
    $pomme2 = new Fruit(Fruit::POMME, 160);
    $pomme3 = new Fruit(Fruit::POMME, 160);
    $cerise1 = new Fruit(Fruit::CERISE, 60);
    $cerise2 = new Fruit(Fruit::CERISE, 60);
    $cerise3 = new Fruit(Fruit::CERISE, 60);
    $banane1 = new Fruit(Fruit::BANANE, 120);
    $banane2 = new Fruit(Fruit::BANANE, 120);
    $banane3 = new Fruit(Fruit::BANANE, 120);

    $panier1 = new Panier();
    $panier1->addFruit($pomme1);
    $panier1->addFruit($cerise1);
    $panier1->addFruit($banane2);
    
    $panier2 = new Panier();
    $panier2->addFruit($pomme1);
    $panier2->addFruit($cerise3);
    $panier2->addFruit($banane1);

    $paniers = [$panier1, $panier2];

    if(isset($_POST['nb_pommes'])){
        $p = new Panier();
        $nbPomme = (int)$_POST['nb_pommes'];
        $nbCerise = (int)$_POST['nb_cerises'];
        $nbBanane = (int)$_POST['nb_bananes'];
        for($i = 0; $i < $nbPomme; $i++){
            $p->addFruit(new Fruit(Fruit::POMME, rand(120, 160)));
        }
        for($i = 0; $i < $nbCerise; $i++){
            $p->addFruit(new Fruit(Fruit::CERISE, rand(30, 60)));
        }
        for($i = 0; $i < $nbBanane; $i++){
            $p->addFruit(new Fruit(Fruit::BANANE, rand(80, 120)));
        }
        $paniers[] = $p;
    }

    foreach($paniers as $panier){
            echo $panier . "<br/>";
        }


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