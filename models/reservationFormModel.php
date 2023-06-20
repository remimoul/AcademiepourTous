<?php
require_once('./models/database.php');

function addCourses($usersId,$coursesId,$reservationDate)
{
// Connexion à la base de données
    $pdo = connexionBDD();

// Préparation et exécution de la requête SQL
    $requete = $pdo->prepare("INSERT INTO reservation (usersId, coursesId, reservationDate) VALUES (?, ?, ?)");
    $requete->bindValue(1, $usersId);
    $requete->bindValue(2, $coursesId);
    $requete->bindValue(3, $reservationDate);

    $resultReservation = $requete->execute();

    return $resultReservation;

}