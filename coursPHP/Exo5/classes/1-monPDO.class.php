<?php

class monPDO{
    private const HOST_NAME = "localhost";
    private const DB_NAME = "db_panierFruit";
    private const USER_NAME = "phpmyadmin";
    private const PWD = "Holberton2025";

    private static $monPDOinstance = null;

    public static function getPDO(){
        //fonction qui sert de récupérer une instance PDO
        //on la crée si elle n'existe pas ou sinon on la retourne directement.
        if(is_null(self::$monPDOinstance)){ // pour s'assurer de réaliser cette action une fois.
            try {
                $connexion = 'mysql:host='.self::HOST_NAME.';dbname='.self::DB_NAME;
                self::$monPDOinstance = new PDO($connexion,self::USER_NAME,self::PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch(PDOException $e){
                $message = "erreur de connexion à la DB" .$e->getMessage();
                die($message);
            }
            self::$monPDOinstance->exec("SET CHAR SET UTF8");
        }
        return self::$monPDOinstance;
    }
}
?>