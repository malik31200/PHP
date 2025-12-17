<?php
    include("common/header.php");
    include("common/menu1.php");

    $chiffreallea = 5;
?>

<h1>Trouver le nombre choisi par l'ordinateur</h1>
    <form action="#" method="POST">
    <label for="rayon">Quel est le chiffre : </label>
    <input type="number" name="chiffre" id="chiffre"><br/>
    <input type="submit" value="Valider">
</form>

<?php
    if(isset($_POST["chiffre"]) && $_POST["chiffre"] > 0){
        $chiffreSaisi = (int)$_POST["chiffre"];
        if($chiffreallea === $chiffreSaisi) {
        echo "<h3>Félicitations!! Vous avez trouvez le bon chiffre.</h3>";
       } else {
        if($chiffreallea > $chiffreSaisi) {
            echo "<h3>le chiffre choisi par l'ordinateur est plus grand que celui que vous avez saisi.</h3>";
        } else {
             echo "<h3>le chiffre choisi par l'ordinateur est plus petit que celui que vous avez saisi.</h3>";
        }
    }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
   }
?>

<?php
    include("common/footer.php");
?>