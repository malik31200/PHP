<?php
class Fruit {
    private $nom; 
    private $poids;
    private $prix;

    public static $fruits = [];

    function __construct($nom, $poids, $prix){
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $prix;

    }

    public function getNom(){
        return $this->nom;
    }

    public function __toString(){
        $affichage = $this->getAffichageIMG();
        $affichage .="Nom : " . $this->nom . "<br/>";
        $affichage .="Poids : " . $this->poids . "<br/>";
        $affichage .="Prix : " . $this->prix . "<br/>";
        return $affichage;
    }
    
    private function getAffichageIMG(){
        if(preg_match("/cerise/i", $this->nom)){
            echo "<img src='source/images/cerise.jpg' alt='image de cerise' /><br/> ";
        }
        if(preg_match("/pomme/i", $this->nom)){
            echo "<img src='source/images/pomme.jpg' alt='image de pomme' /><br/> ";
        }
    }
}

?>
