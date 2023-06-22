<?php

/****************************
 * ----- AFFICHAGE FUNCTION  FOR MYACCOUNTVIEW.PHP-----
 ****************************/

    if (isset($_SESSION['usersId'])) {
        $bddPDO = connexionBDD();
        $userid = $_SESSION['usersId'];
        $requetes = "SELECT id, c.coursesTitle, r.reservationDate, r.coursesId FROM reservation r JOIN courses c ON r.coursesId = c.idCourses WHERE r.usersId = $userid";
        $results = $bddPDO->query($requetes);
        $reservation = $results->fetchAll(PDO::FETCH_ASSOC);
    }

function deleteResa($id) {

    $bddPDO = connexionBDD();

    // Préparation de la requête SQL de suppression
    $requete = "DELETE FROM reservation WHERE id = :id";

    // Préparation de la requête SQL
    $requete_preparee = $bddPDO->prepare($requete);

    // Remplacement des paramètres de la requête préparée
    $requete_preparee->bindParam(':id', $id);

    // Exécution de la requête préparée
    $result = $requete_preparee->execute();

    return $result;
}


/****************************
 * ----- FIN DE FUNCTION  FOR MYACCOUNTVIEW-----
 ****************************/



 







