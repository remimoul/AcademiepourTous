<?php
require_once('./models/reservationFormModel.php');

function addnewCourses($usersId,$coursesId,$reservationDate){

$resultAddCourses = addCourses($usersId,$coursesId,$reservationDate);

if(!$resultAddCourses){
    echo "un probleme est survenu";
}else{
    echo "<script type = \"text/javascript\"> alert('La réservation a été ajoutée avec succès !')</script>";
}

}


function addNewOneCourses(){
    //    // Vérification que l'utilisateur est connecté
    if (isset($_SESSION['usersId'])) {
        header('Location: loginView.php');
        exit();
    }else{

        addnewCourses($_POST['usersId'],$_POST['coursesId'],$_POST['reservationDate']);
    }

require_once('views/coursView.php');

}

