<?php
    require_once("classes/personnage_class.php");
    include("common/header.php");
    include("common/menu1.php");
?>

<h2>Personnages : </h2>

<?php
    $p1 = new Personnage("Cloud",  "player_h.jpg", 22, Personnage::HOMME, Personnage::PM_MED, Personnage::PV_MED); // "Personnage ::" pour accéder aux constantes de classes.
    $p2 = new Personnage("Yuna","player_f.jpg", 21, Personnage::FEMME, Personnage::PM_MIN, Personnage::PV_MIN);
    $p3 = new Personnage("Séphiroth","player_m.jpg", 28, Personnage::HOMME, Personnage::PM_MAX, Personnage::PV_MAX);

    $persos = Personnage::getListPersonnages();
   
    foreach($persos as $perso){ // pour afficher les persos à la place de "$p1->afficherMesInformationsTemplate();"
        $perso->afficherMesInformationsTemplate();
        echo "<br/>-----------------------------<br/>";
    }
?>

<?php
    include("common/footer.php");
?>