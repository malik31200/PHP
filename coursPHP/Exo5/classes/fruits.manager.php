<?php

require_once("classes/fruits_class.php");
require_once("classes/1-monPDO.class.php");

class fruitManager{
    public static function setFruitFromDB(){
        $pdo = monPDO::getPDO();
        $stmt = $pdo->prepare("Select f.nom as Nom, f.poids as Poids, f.prix as Prix, p.NomClient as Client from Fruit f inner join Panier p on f.identifiant = p.identifiant");
        $stmt->execute();
        $fruits = $stmt->fetchAll();
        foreach ($fruits as $fruit){
            Fruit::$fruits[] = new fruit($fruit['Nom'], $fruit['Poids'], $fruit['Prix']);
        }
    }
}

?>