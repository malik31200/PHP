<?php
class Personnage {
    private static $personnages = []; //Information disponnible depuis la classe elle même

    private $nom; // attributs de classe (comme un moule)
    private $img; // alimente grâce au constructeur.
    private $age;
    private $sexe;
    private $pm;
    private $pv;

    const HOMME = true;
    const FEMME = false;

    const PM_MAX = 99;
    const PM_MED = 49;  //LES CONSTANTES
    const PM_MIN = 1;

    const PV_MAX = 99;
    const PV_MED = 49;
    const PV_MIN = 1;

    function __construct($nom, $img, $age, $sexe, $pm, $pv){
        $this->nom = $nom;
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->pm =$pm;
        $this->pv =$pv;
        self::$personnages[] = $this; // on crée l'objet et on le met dans personnages - self:: pour accéder à ma liste de personnages
    }

    function getNom(){return $this->nom;} //retourne la valeur de l'attribut nom du personnage
    function getImg(){return $this->img;}
    function getAge(){return $this->age;}
    function getSexe(){return $this->sexe;}
    function getPm(){return $this->pm;}
    function getPv(){return $this->pv;}

    function setNom($nom){$this->nom = $nom;} //modifier l'information du nom.
    function setImg($nom){$this->img = $img;}
    function setAge($nom){$this->age = $age;}
    
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

    public static function getListPersonnages(){
        return self::$personnages;
    }
       
}
?>
