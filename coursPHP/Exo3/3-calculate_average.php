<?php
    include("common/header.php");
    include("common/menu1.php");

?>

<h1>Calculer la moyenne</h1>
<!-- Formulaire de saisie -->
<form action="#" method="GET">
    <label for="nb">Nombre de notes : </label>
    <input type="number" name="nb" id="nb"><br/>
    <input type="submit" value="Valider">
</form>

<?php
    /* Traitement du chiffre saisi */
    if(isset($_GET["nb"]) && $_GET["nb"] > 0){
       $nbnotes =  $_GET["nb"];
       echo "<form action=\"#\" method=\"POST\">";
       echo "<fieldset>";
       echo "<legend> Moyenne : </legend>";
       for($i = 1; $i <= $nbnotes; $i++){
        echo "<label for=\"note". $i ."\">Note". $i ." : </label>";
        echo "<input type=\"number\" name=\"note". $i ."\" id=\"note". $i ."\" required><br/>";
       }
       echo "<input type=\"submit\" value=\"Calculer\">";
       echo "</fieldset>";
       echo "</form>";
       if(isset($_POST['note1'])){
        $res = 0;
        for($i = 1; $i <= $nbnotes; $i++){
            $res += $_POST['note'. $i];
        }
        echo "La moyenne est : ". $res / $nbnotes;
       }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }

?>

<?php
    include("common/footer.php");
?>