<?php
require_once ('models/database.php');

function getCourses(){
    $bddPDO = connexionBDD();
    $requete ="SELECT * FROM reservation WHERE usersId";
    $resultGetCourses = $bddPDO->query($requete);
    return $resultGetCourses;


}