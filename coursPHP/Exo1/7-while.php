<?php
define ("SEPARATEUR", "-"); //constante en majuscule

$nomJoueur1 = "Likma"; //string
$ageJoueur1 = 21; //integer
$estUnHommeJoueur1 = false;

$nomJoueur2 = "Kais";
$ageJoueur2 = 18;
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
genererSeparation(SEPARATEUR);
afficherMajeur($ageJoueur1);
genererSeparation(SEPARATEUR);
afficherMajeur($ageJoueur2);
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

?>