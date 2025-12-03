<?php
define ("SEPARATEUR", "-"); //constante en majuscule

$nomJoueur1 = "Likma"; //string
$ageJoueur1 = 10; //integer
$estUnHommeJoueur1 = false;

$nomJoueur2 = "Kais";
$ageJoueur2 = 15;
$estUnHommeJoueur2 = true;

genererSeparation(SEPARATEUR);
afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
genererSeparation(SEPARATEUR);
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
genererSeparation(SEPARATEUR);

afficherLeJoueurLePlusAge($ageJoueur1, $ageJoueur2);
genererSeparation(SEPARATEUR);
$differenceAge = calculDifferenceAge($ageJoueur1, $ageJoueur2);
echo "La différence d'âge est de: ". $differenceAge;

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
    for($i = 0; $i < 50; $i++){
        echo $separateur;
    }
    echo "<br />";
}

?>