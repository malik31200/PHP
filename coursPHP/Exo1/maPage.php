<?php

$nomDuJoueur1 = "Likma"; //string
$age = 30; //integer
$estUnHomme = false;
echo "Nom Du Joueur 1 : " . $nomDuJoueur1;
echo "<br />";
echo "age Du Joueur 1 : " . $age;
echo "<br />";
$age = $age +1 ;
echo "age Du Joueur 1 : " . $age;
echo "<br />";

if($estUnHomme ===  true){
    echo "C'est un homme";
} else { //$estUnHomme === false
    echo "C'est une femme";
}

?>