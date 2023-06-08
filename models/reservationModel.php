<?php


if (isset($_SESSION['usersId'])) {
    $bddPDO = connexionBDD();
    $userid = $_SESSION['usersId'];
    $requetes = "SELECT coursesId,reservationDate FROM reservation WHERE usersId = $userid";
    $results = $bddPDO->query($requetes);

    $reservation = $results->fetchAll(PDO::FETCH_ASSOC);
}
?>


