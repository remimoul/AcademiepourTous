<?php
require_once('./models/reservationFormModel.php');

function addnewCourses($usersId,$coursesId,$reservationDate){

$resultAddCourses = addCourses($usersId,$coursesId,$reservationDate);

if(!$resultAddCourses){
    echo "un probleme est survenu";
}else{
    echo "<script type = \"text/javascript\"> alert('La réservation a été ajoutée avec succès ! Un email de confirmation vous a été envoyé')</script>";
}

}


function addNewOneCourses(){
    //    // Vérification que l'utilisateur est connecté
    if (isset($_SESSION['usersId'])) {
        header('Location: loginView.php');
        exit();
    }else{
        // Vérification que la date sélectionnée est un samedi ou un dimanche
        $reservationDate = $_POST['reservationDate'];
        $date = new DateTime($reservationDate);

        if ($date->format('N') == 5 || $date->format('N') == 6) {
            echo "Vous ne pouvez pas réserver le vendredi ou le samedi.";
            require_once('views/coursView.php');
            return;
        }

        addnewCourses($_POST['usersId'],$_POST['coursesId'],$_POST['reservationDate']);
    }

require_once('views/coursView.php');

}

