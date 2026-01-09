<?php
    include("common/header.php");
    include("common/menu1.php");

    session_start();
    if(!isset($_SESSION["chiffreAleatoire"])){
        $_SESSION["chiffreAleatoire"] = rand(1, 10);
    }
?>

<h1>Trouver le nombre choisi par l'ordinateur</h1>
<!-- Bouton réinitialiser -->
<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Réinitialiser">
</form>

<!-- Formulaire de saisie -->
<form action="#" method="POST">
    <label for="chiffre">Quel est le chiffre : </label>
    <input type="number" name="chiffre" id="chiffre"><br/>
    <input type="submit" value="Valider">
</form>

<?php
    if(isset($_POST["reinit"]) && $_POST["reinit"] === "yes"){
        $_SESSION["chiffreAleatoire"] = rand(1, 10);;
    }

    /* Traitement du chiffre saisi */
    if(isset($_POST["chiffre"]) && $_POST["chiffre"] > 0){
        $chiffreSaisi = (int)$_POST["chiffre"];
        $chiffreallea = $_SESSION["chiffreAleatoire"];
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