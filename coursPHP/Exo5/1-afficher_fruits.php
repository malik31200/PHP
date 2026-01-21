<?php

require_once("classes/fruits_class.php");
require_once("classes/panier_class.php");
require_once("classes/1-monPDO.class.php");
include("common/header.php");
include("common/menu1.php");
?>

<h2> Fruits : </h2>

<?php
    $pdo = monPDO::getPDO();
    $stmt = $pdo->prepare("Select f.nom as Nom, f.poids as Poids, f.prix as Prix, p.NomClient as Client from Fruit f inner join Panier p on f.identifiant = p.identifiant");
    $stmt->execute();
    $fruits = $stmt->fetchAll();
    foreach ($fruits as $fruit){
        if(preg_match("/cerise/i", $fruit['Nom'])){
            echo "<img src='source/images/cerise.jpg' alt='image de cerise' /><br/> ";
        }
        if(preg_match("/pomme/i", $fruit['Nom'])){
            echo "<img src='source/images/pomme.jpg' alt='image de pomme' /><br/> ";
        }
        echo "Nom : " . $fruit['Nom'] . "<br/>";
        echo"Poids : " . $fruit['Poids'] . "<br/>";
        echo "Prix : " . $fruit['Prix'] . "<br/>";
        echo"Panier de : " . $fruit['Client'] . "<br/>";
        echo "<br/>-----------------------------<br/>";
    }

?>

<?php
    include("common/footer.php");
?>