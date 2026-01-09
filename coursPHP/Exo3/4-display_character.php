<?php
    include("common/header.php");
    include("common/menu1.php");

?>

<h1>Sélectionner un personnage </h1>
<form action="#" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso"> <!-- liste déroulante -->
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select> <br/>
    <input type="submit" value="Valider">
</form>

<?php
    if(isset($_POST['perso'])){
        if($_POST['perso'] === "homme"){
            echo "<img src = 'source/images/player_h.jpg' alt = 'image d'homme' ";
        } else if($_POST['perso'] === "femme"){
             echo "<img src = 'source/images/player_f.jpg' alt = 'image de femme' ";
        }
    } else {
        echo "<h2>Veuillez choisir un personnage ci-dessus</h2>";
    }
?>


<?php
    include("common/footer.php");
?>