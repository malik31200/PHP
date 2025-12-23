<?php
    include("common/header.php");
    include("common/menu1.php");

    $p1 = [
        "Nom" => "Cloud",
        "Age" => 22,
        "Sexe" => "Homme", 
        "PM" => 80,
        "PV" => 75
    ];
    $p2 = [
        "Nom" => "Yuna",
        "Age" =>21,
        "Sexe" => "Femme",
        "PM" => 70,
        "PM" => 60
    ];
    $p3 = [
        "Nom" => "Séphiroth",
        "Age" => 28,
        "Sexe" => "Homme",
        "PM" => 99,
        "PV" => 99
    ];

?>

<h1>Sélectionner un personnage </h1>
<form action="#" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso" onChange = "submit()"> <!-- liste déroulante -->
        <option value="p1" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p1") echo "selected"?>>Cloud</option>
        <option value="p2" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p2") echo "selected"?>>Yuna</option>
        <option value="p3" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p3") echo "selected"?>>Sephiroth</option>
    </select> <br/>
</form>

<h2>Personnage : </h2>
<?php
        if(!isset($_POST['perso']) || $_POST['perso'] === "p1"){
            echo "<div class='gauche'>";
                echo "<img src = 'source/images/player_h.jpg' alt = 'image d'homme'/>";
            echo "</div>";
            echo "<div class='gauche'>";
                afficherPerso($p1);
            echo "</div>";
        } else if($_POST['perso'] === "p2"){
            echo "<div class='gauche'>";
                echo "<img src = 'source/images/player_f.jpg' alt = 'image de femme'/>";
            echo "</div>";
            echo "<div class='gauche'>";
                afficherPerso($p2);
            echo "</div>";
        } else if($_POST['perso'] === "p3"){
            echo "<div class='gauche'>";
                echo "<img src = 'source/images/player_m.jpg' alt = 'image d'homme'/>";
             echo "</div>";
            echo "<div class='gauche'>";
                afficherPerso($p3);
            echo "</div>";
    }
    echo "<div class='clearB'></div>";

    function afficherPerso($personnage){
        foreach($personnage as $index => $value){
            echo "<b>".$index."</b> : ".$value. "<br/>";
        }
       /* echo "Nom :" . $personnage[0] . "<br/>";
        echo "Age :" . $personnage[1] . "<br/>";
        if($personnage[2]){
            echo "Sexe : Homme <br/>";
        } else {
             echo "Sexe : Femme <br/>";
        }
        
        echo "PM :" . $personnage[3] . "<br/>";
        echo "PV :" . $personnage[4] . "<br/>";*/
    }
?>


<?php
    include("common/footer.php");
?>