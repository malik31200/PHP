<?php

// ------------------------------
// AFFICHAGE DES ERREURS PHP
// ------------------------------
// Ces lignes permettent d’afficher les erreurs PHP directement
// dans le navigateur (utile en phase de développement)

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ------------------------------
// CONSTANTES DE CONNEXION
// ------------------------------

// Nom de l’hôte MySQL (serveur de base de données)
const HOST_NAME = "localhost";

// Nom de la base de données à utiliser
const DB_NAME = "db_panierFruit";

// Nom d’utilisateur MySQL
const USER_NAME = "phpmyadmin";

// Mot de passe MySQL
const PWD = "Holberton2025";

try{
    // ------------------------------
    // CONSTRUCTION DU DSN (Data Source Name)
    // ------------------------------
    // Chaîne de connexion qui indique à PDO :
    // - le type de base (mysql)
    // - le serveur (host)
    // - la base de données (dbname)
    $connexion = 'mysql:host=' . HOST_NAME . ';dbname=' . DB_NAME;

     // ------------------------------
    // CRÉATION DE L’OBJET PDO
    // ------------------------------
    // new PDO crée la connexion à la base de données
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    // permet de lever des exceptions en cas d’erreur SQL
    $monPDO = new PDO(
        $connexion,
        USER_NAME,
        PWD,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch(PDOException $e) {
     // ------------------------------
    // GESTION DES ERREURS DE CONNEXION
    // ------------------------------
    // Si la connexion échoue, on récupère le message d’erreur
    // et on arrête l’exécution du script
    $message = "erreur de connexion à la DB". $e->getMessage();
    die($message);
}

// ------------------------------
// SI LA CONNEXION A RÉUSSI
// ------------------------------
if($monPDO){
    // Valeur minimale du poids recherchée
    $limitation = 130;

    // ------------------------------
    // REQUÊTE SQL AVEC PARAMÈTRE NOMMÉ
    // ------------------------------
    // On sélectionne tous les fruits dont le poids est supérieur
    // à la valeur passée en paramètre :valeur
    $req = "select * from Fruit where poids > :valeur";

    // ------------------------------
    // PRÉPARATION DE LA REQUÊTE
    // ------------------------------
    // prepare() prépare la requête sans l’exécuter
    // Cela protège contre les injections SQL
    $stmt = $monPDO->prepare($req);

    // ------------------------------
    // LIAISON DU PARAMÈTRE
    // ------------------------------
    // bindValue associe la valeur PHP à :valeur
    // PDO::PARAM_INT précise que c’est un entier
    $stmt->bindValue(':valeur', $limitation, PDO::PARAM_INT);

    // ------------------------------
    // EXÉCUTION DE LA REQUÊTE
    // ------------------------------
    $stmt->execute();

    // ------------------------------
    // RÉCUPÉRATION DES RÉSULTATS
    // ------------------------------
    // fetchAll() retourne toutes les lignes sous forme de tableau
    $res1 = $stmt->fetchAll();
    
    echo "<pre>";
    print_r($res1);
}

?>
