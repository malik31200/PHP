<?php
class Fruit {
    private $nom; 
    private $poids;
    private $prix;

    const POMME = "pomme";
    const CERISE = "cerise";
    const BANANE = "banane";

    const POMMEIMG = "pomme.jpg";
    const CERISEIMG = "cerise.jpg";
    const BANANEIMG = "banane.jpg";

    function __construct($nom, $poids){
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $this->getPrixFruits($nom);
    }

    public function getNom(){
        return $this->nom;
    }

    private function getPrixFruits($nom){
        if ($nom === self::POMME ){
            return 15;
        } elseif ($nom === self::CERISE) {
            return 20;
        } elseif ($nom === self::BANANE){
            return 10;
        }
    }

    public function __toString(){
        $affichage = $this->getAffichageIMG();
        $affichage .="Nom : " . $this->nom . "<br/>";
        $affichage .="Poids : " . $this->poids . "<br/>";
        $affichage .="Prix : " . $this->prix . "<br/>";
        return $affichage;
    }
    
    private function getAffichageIMG(){
        if($this->nom === self::POMME){
            return "<img src='source/images/".self::POMMEIMG."' alt ='image de pomme'/> <br/>";
        } elseif ($this->nom === self::CERISE){
            return "<img src='source/images/".self::CERISEIMG."' alt ='image de cerise'/><br/>";
        } elseif ($this->nom === self::BANANE){
            return "<img src='source/images/".self::BANANEIMG."' alt ='image de banane'/><br/>";
        }
    }
}
?>
