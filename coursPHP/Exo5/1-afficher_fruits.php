<?php

require_once("classes/fruits_class.php");
require_once("classes/panier_class.php");
require_once("classes/1-monPDO.class.php");
require_once("classes/fruits.manager.php");
include("common/header.php");
include("common/menu1.php");
?>

<h2> Fruits : </h2>

<?php
   fruitManager::setFruitFromDB();

    foreach(Fruit::$fruits as $fruit){
        echo $fruit;
    }

?>

<?php
    include("common/footer.php");
?>