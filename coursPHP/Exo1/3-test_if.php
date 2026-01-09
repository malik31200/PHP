<?php

$nomJoueur1 = "Likma"; //string
$ageJoueur1 = 30; //integer
$estUnHommeJoueur1 = false;

$nomJoueur2 = "Kais";
$ageJoueur2 = 15;
$estUnHommeJoueur2 = true;

genererSeparation();
afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
genererSeparation();
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
genererSeparation();

afficherLeJoueurLePlusAge($ageJoueur1, $ageJoueur2);
genererSeparation();

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


function genererSeparation(){
    echo "<br />";
    echo "-------------------------";
    echo "<br />";
}

?>