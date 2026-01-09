<?php
    require_once("classes/personnage_class.php");
    include("common/header.php");
    include("common/menu1.php");
?>

<h2>Personnages : </h2>

<?php
    $p1 = new Personnage("Cloud",  "player_h.jpg", 22, Personnage::HOMME, Personnage::PM_MED, Personnage::PV_MED); // Personnage :: pour accéder aux constantes de classes.
    $p1->afficherMesInformationsTemplate(); //call function
    echo "<br/>-----------------------------<br/>";
    $p2 = new Personnage("Yuna","player_f.jpg", 21, Personnage::FEMME, Personnage::PM_MIN, Personnage::PV_MIN);
    $p2->afficherMesInformationsTemplate();
    // $p2->setNom("Titi"); //pour afficher un personnage en setter.
    // $p2->afficherMesInformationsTemplate();
    echo "<br/>-----------------------------<br/>";
    $p3 = new Personnage("Séphiroth","player_m.jpg", 28, Personnage::HOMME, Personnage::PM_MAX, Personnage::PV_MAX);
    $p3->afficherMesInformationsTemplate();

    echo "<pre>"; //pour mettre en forme le tableau.
    $persos = Personnage::getListPersonnages();
    print_r($persos); //pour afficher le tableau d'un attribut d'une classe en méthode statique.
    echo "</pre>";

?>

<?php
    include("common/footer.php");
?>