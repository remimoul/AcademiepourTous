<?php
require('../models/database.php');

if (isset($_SESSION['usersId'])){
    $bddPDO = connexionBDD();
    $userid = $_SESSION['usersId'];
    $requete = "SELECT nom,prenom,mail FROM users WHERE usersId = $userid";
    $result = $bddPDO->query($requete);

    $users = $result->fetchAll(PDO::FETCH_ASSOC);


} ?>