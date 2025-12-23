<?php

class Personnage {
    public $nom = "Cloud"; // attributs
    public $img = "player_h.jpg";
    public $age = 22;
    public $sexe = true;
    public $pm = 80;
    public $pv = 75;

    public function afficherMesInfos(){
        echo "<b>Nom : </b>". $this->nom . "<br/>"; //fais référence à l'objet lui même
        echo "<b>Age : </b>". $this->age . "<br/>";
        echo "<b> Sexe </b> :";
        if($this->sexe){
                    echo "Homme <br/>";
                } else {
                    echo "Femme <br/>";
                }
        echo "<b>PM : </b>". $this->pm . "<br/>";
        echo "<b>PV : </b>". $this->pv . "<br/>";
    }

    public function afficherMesInformationsTemplate(){
        echo "<div class='gauche'>";
            echo "<img src = 'source/images/".$this->img."' alt = '".$this->img."'/>";
        echo "</div>";
        echo "<div class='gauche'>";
            $this->afficherMesInfos(); //appeler fonction dans une fonction
        echo "</div>";
        echo "<div class='clearB'></div>";
    }
       
}
    include("common/header.php");
    include("common/menu1.php");
?>

<h2>Personnage : </h2>

<?php
    $p1 = new Personnage();
    $p1->afficherMesInformationsTemplate(); //call function
    echo "<br/>-----------------------------<br/>";
    $p2 = new Personnage();
    $p2->nom = "Yuna";
    $p2->age = 21;
    $p2->sexe = false;
    $p2->pm = 70;
    $p2->pv = 60;
    $p2->img = "player_f.jpg";
    $p2->afficherMesInformationsTemplate(); //call function
?>

<?php
    include("common/footer.php");
?>