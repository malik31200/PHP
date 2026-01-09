<?php

$nomJoueur1 = "Likma"; //string
$ageJoueur1 = 30; //integer
$estUnHommeJoueur1 = false;

$nomJoueur2 = "Kais";
$ageJoueur2 = 15;
$estUnHommeJoueur2 = true;

test(); //Call function

$text = hello();
echo $text; //affiche la valeur de la fonction

$cal = calcul(10);
echo $cal;

afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);


function test (){
    echo "<br / >";
    echo "Coucou";
    echo "<br / >";
}

function afficherJoueur ($nom, $age, $homme){
    echo "<br / >";
    echo "<br / >";
    echo "Nom Du Joueur 1 : " . $nom;
    echo "<br />";
    echo "age Du Joueur 1 : " . $age;
    echo "<br />";
    $age = $age +1 ;
    echo "age Du Joueur 1 : " . $age;
    echo "<br />";


    if($homme ===  true){
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }
}

function hello () {
    return "Hello!!!";
}

function calcul ($c) {
    $a = 5;
    $b = 8;
    return $a + $b + $c;
}


?>