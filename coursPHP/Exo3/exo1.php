
<?php
    include("common/header.php");
    include("common/menu1.php");
?>

<h1>Affichage des tables de multiplication</h1>

<?php
    define("TABLE", 8);
    echo "<h2> La table de ". TABLE ." :" . "</h2>";
    for($i = 1; $i<= 10 ; $i++){
        echo $i . " * ". TABLE . " = ". $i * TABLE ."<br/>";
    }
?>

<?php
    include("common/footer.php");
?>