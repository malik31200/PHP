<?php
class Panier{
    private static $prochainIdentifiant = 1;

    private $identifiant;
    private $pommes = [];
    private $cerises = [];
    private $bananes = [];

    public function __construct(){
        $this->identifiant = self::$prochainIdentifiant;
        self::$prochainIdentifiant ++;
    }

    public function addFruit($fruit){
        if($fruit->getNom() === Fruit::POMME){
            $this->pommes[] = $fruit;
        } else if($fruit->getNom() === Fruit::CERISE){
            $this->cerises[] = $fruit;
        } else if($fruit->getNom() === Fruit::BANANE){
            $this->bananes[] = $fruit;
        }
    }

    public function getIdentifiant(){
        return $this->identifiant;
    }

    public function __toString(){
        $affichage = "<b>Voici le contenu du panier </b>" .$this->identifiant ." : <br/>";
        foreach($this->pommes as $pomme){
            $affichage .= $pomme;
        }
        foreach($this->cerises as $cerise){
            $affichage .= $cerise;
        }
        foreach($this->bananes as $banane){
            $affichage .= $banane;
        }
        return $affichage;
    }
}
?>