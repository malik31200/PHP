<?php

require_once("classes/fruits_class.php");
require_once("classes/panier_class.php");
require_once("classes/1-monPDO.class.php");
require_once("classes/fruits.manager.php");
require_once("classes/paniers.manager.php");
include("common/header.php");
include("common/menu1.php");
?>

<h2> Fruits : </h2>

<?php
   panierManager::setPanierFromDB();

    foreach(Panier::$paniers as $panier){
        $panier->setFruitToPanierFromDB();
        // echo $panier;
    }

?>

<?php
    include("common/footer.php");
?>