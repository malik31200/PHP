<?php
define ("SEPARATEUR", "-"); //constante en majuscule

$joueur1 = ["Tata", 21, false];
$joueur2 = ["kais", 18, true];

// $nomJoueur1 = "Tata"; //string
// $ageJoueur1 = 21; //integer
// $estUnHommeJoueur1 = false;

// $nomJoueur2 = "Kais";
// $ageJoueur2 = 18;
// $estUnHommeJoueur2 = true;

genererSeparation(SEPARATEUR);
//afficherJoueur($joueur1[0], $joueur1[1], $joueur1[2]);
afficherTableau($joueur1);
genererSeparation(SEPARATEUR);
//afficherJoueur($joueur2[0], $joueur2[1], $joueur2[2]);
afficherTableau($joueur2);
genererSeparation(SEPARATEUR);

afficherLeJoueurLePlusAge($joueur1[1], $joueur2[1]);
genererSeparation(SEPARATEUR);
$differenceAge = calculDifferenceAge($joueur1[1], $joueur2[1]);
echo "La différence d'âge est de: ". $differenceAge;
genererSeparation(SEPARATEUR);
afficherMajeur($joueur1[1]);
genererSeparation(SEPARATEUR);
afficherMajeur($joueur2[1]);
genererSeparation(SEPARATEUR);

function afficherJoueur ($nom, $age, $homme){
    echo "Nom Du Joueur : " . $nom;
    echo "<br />";
    echo "age Du Joueur : " . $age;
    echo "<br />";

    if($homme ===  true){
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }

    
}

function afficherLeJoueurLePlusAge($ageJoueur1, $ageJoueur2){
    if($ageJoueur1 > $ageJoueur2){
        echo "Joueur 1 est le plus agé.";
    } else {
        echo "Joueur 2 est le plus agé.";
    }
}

function calculDifferenceAge($ageJoueur1, $ageJoueur2){
    $resultat = $ageJoueur1 - $ageJoueur2;
    if($resultat < 0){
       $resultat = - $resultat;
    }
    return $resultat;
}

function genererSeparation($separateur){
    echo "<br />";
    //for($i = 0; $i < 50; $i++){
    //    echo $separateur;
    //}
    $i = 0;
    while($i < 50){
        $i++;
        echo $separateur;
    }
    echo "<br />";
}

function afficherMajeur($age){
    switch($age){
        case 21:
        case 20:
        case 19 : echo "Il est majeur";
        break;
        case 18 : echo "Il est tout juste majeur";
        break;
        case 17 :  echo "Il est encore mineur";
        break;
        case 16 :  echo "Il est mineur";
        break;
        case 16 :  echo "Il est mineur";
        break;
        default : echo "????";
        break;
    }
}

function afficherTableau($tab){
    $nombreCaseTableau = count($tab);
    // for($i = 0; $i < $nombreCaseTableau; $i++){
    //     echo $tab[$i]. "<br />";
    // }
    foreach($tab as $indice => $value) {
        echo $indice . " : ". $value. "<br />";
    }
}

?>