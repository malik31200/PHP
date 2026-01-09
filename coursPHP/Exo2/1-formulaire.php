<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon premier site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1 class="formulaire"> FORMULAIRE </h1>
    <form action="#">
        <fieldset>
            <legend>Informations</legend>
            <label for="nom:">Nom :</label>
            <input type="text" name="nom" id="nom" required>
            <label for="age:">Age :</label>
            <input type="number" name="age" id="age" required>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>
</body>