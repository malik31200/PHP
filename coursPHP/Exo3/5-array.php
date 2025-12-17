<?php
    include("common/header.php");
    include("common/menu1.php");

?>

<h1>Tableaux</h1>
<h2>Etape 1</h2>
Réalisez un tableau contenant les valeurs : 2,6,12,5,26,34,40,60
<h2>Etape 2</h2>
Réalisez une fonction qui vérifie si un tableau ne contient que des valeurs paires ou normalizer_normalize
<h2>Etape 3</h2>
Afficher un message pour l'indiquer à l'utilisateur

<?php
    $tab = [2, 6, 12, 5, 26, 34, 40, 60];

    echo "<h2>Résultat : </h2>";
    if(checkArray($tab) === true){
        echo "Le tableau ne contient que des valeurs pairs";
    } else {
        echo "Le tableau contient des valeurs impairs";
    }

    function checkArray($tableau){
        for($i = 0; $i <= count($tableau) - 1; $i++){
            if($tableau[$i] % 2 !== 0){
                return false;
            }
        }
        return true;
    }

?>