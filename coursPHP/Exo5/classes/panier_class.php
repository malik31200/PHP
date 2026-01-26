<?php
class Panier{
    public static $paniers = [];

    private $identifiant;
    private $nomClient;
    private $pommes = [];
    private $cerises = [];
    private $bananes = [];

    public function __construct($identifiant, $nomClient){
        $this->identifiant = $identifiant;
        $this->nomClient = $nomClient;
    }

    public function setFruitToPanierFromDB(){
        $fruits = panierManager::getFruitPanier($this->identifiant);
        echo "<pre>";
        print_r($fruits);
        // if($fruit->getNom() === Fruit::POMME){
        //     $this->pommes[] = $fruit;
        // } else if($fruit->getNom() === Fruit::CERISE){
        //     $this->cerises[] = $fruit;
        // } else if($fruit->getNom() === Fruit::BANANE){
        //     $this->bananes[] = $fruit;
        // }
    }

//     public function getIdentifiant(){
//         return $this->identifiant;
//     }

//     public function __toString(){
//         $affichage = "<b>Voici le contenu du panier </b>" .$this->identifiant ." : <br/>";
//         foreach($this->pommes as $pomme){
//             $affichage .= $pomme;
//         }
//         foreach($this->cerises as $cerise){
//             $affichage .= $cerise;
//         }
//         foreach($this->bananes as $banane){
//             $affichage .= $banane;
//         }
//         return $affichage;
//     }
    }
?>