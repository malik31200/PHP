<?php

$nomJoueur1 = "Likma"; //string
$ageJoueur1 = 30; //integer
$estUnHommeJoueur1 = false; //boolean

?>
<h1> Nom Du Joueur 1 : <?php echo $nomJoueur1; ?> </h1>
<br />

age Du Joueur 1 : <?php echo $ageJoueur1; ?>
<br />

<?php $ageDuJoueur1 = $ageJoueur1 +1; ?>

age Du Joueur 1 : <?php $ageJoueur1; ?>
<br />

<?php
if($estUnHommeJoueur1 ===  true){
?>
    C'est un homme
<?php } else { //$estUnHomme === false ?>
    C'est une femme
<?php }?>
