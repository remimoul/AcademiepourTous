<?php


if (isset($_SESSION['usersId'])) {
    $bddPDO = connexionBDD();
    $userid = $_SESSION['usersId'];

    $requetes = "SELECT c.coursesTitle, r.reservationDate, r.coursesId FROM reservation r JOIN courses c ON r.coursesId = c.idCourses WHERE r.usersId = $userid";

//    $requetes = "SELECT coursesId,reservationDate FROM reservation WHERE usersId = $userid";
    $results = $bddPDO->query($requetes);

    $reservation = $results->fetchAll(PDO::FETCH_ASSOC);
}
?>


