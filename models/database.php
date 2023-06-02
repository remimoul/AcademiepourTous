<?php

function connexionBDD(){
    try{

        $host = $_ENV['ACADEMIE_DB_HOST'] ?? 'localhost';
        $dbname = $_ENV['ACADEMIE_DB_NAME'] ?? 'academie';
        $charset = $_ENV['ACADEMIE_DB_CHARSET'] ?? 'utf8';
        $user = $_ENV['ACADEMIE_DB_USER'] ?? 'root';
        $password = $_ENV['ACADEMIE_DB_PASSWORD'] ?? '';

    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset",
        $user,
        $password,
        []
    );

    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

return $db;

}
