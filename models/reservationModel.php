<?php


if (isset($_SESSION['usersId'])) {
    $bddPDO = connexionBDD();
    $userid = $_SESSION['usersId'];
    $requete = "SELECT coursesId,reservationDate FROM reservation WHERE usersId = $userid";
    $result = $bddPDO->query($requete);

    $reservation = $result->fetchAll(PDO::FETCH_ASSOC);
}
?>


