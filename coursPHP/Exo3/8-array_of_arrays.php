<?php
    include("common/header.php");
    include("common/menu1.php");

    $p1 = [
        "Nom" => "Cloud",
        "Img" => "player_h.jpg",
        "Age" => 22,
        "Sexe" => true, 
        "PM" => 80,
        "PV" => 75
    ];
    $p2 = [
        "Nom" => "Yuna",
        "Img" => "player_f.jpg",
        "Age" =>21,
        "Sexe" => false,
        "PM" => 70,
        "PV" => 60
    ];
    $p3 = [
        "Nom" => "Séphiroth",
        "Img" => "player_m.jpg",
        "Age" => 28,
        "Sexe" => true,
        "PM" => 99,
        "PV" => 99
    ];
    
    $persos = [$p1,$p2, $p3];
?>

<h2>Personnage : </h2>
<?php
    foreach($persos as $perso){
        echo "<div class='gauche'>";
            echo "<img src = 'source/images/".$perso['Img']."' alt = '".$perso['Img']."'/>";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($perso);
        echo "</div>";
        echo "<div class='clearB'></div>";
    }
       
    function afficherPerso($personnage){
        foreach($personnage as $index => $value){
            if($index !== "Img" && $index !== "Sexe"){
                echo "<b>".$index."</b> : ".$value. "<br/>";
            }
            if($index === "Sexe"){
                "<b> Sexe </b> :"
                if($value === true){
                    echo "Homme <br/>";
                } else {
                    echo "Femme <br/>";
                }
            }
        }
       
    }
?>


<?php
    include("common/footer.php");
?>