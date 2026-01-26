<?php

require_once("classes/panier_class.php");
require_once("classes/1-monPDO.class.php");

class panierManager{
    public static function setPanierFromDB(){
        $pdo = monPDO::getPDO();
        $stmt = $pdo->prepare("Select identifiant, NomClient from Panier");
        $stmt->execute();
        $paniers = $stmt->fetchAll();
        foreach ($paniers as $panier){
            Panier::$paniers[] = new panier($panier['identifiant'], $panier['NomClient'] );
        }
    }

    public static function getFruitPanier($identifiant){
        $pdo = monPDO::getPDO();
        $req = "select f.nom as fruit, f.poids as poids, f.prix as prix from Panier p inner join Fruit f on f.identifiant = p.identifiant where p.identifiant = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id", $identifiant, PDO::PARAM_INT);
        $stmt->execute();
         return $stmt->fetchAll();
    }
}

?>