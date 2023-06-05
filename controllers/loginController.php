<?php
require_once ('models/registration.php');
require_once ('models/profilModel.php');

function connexion(){
    if(isset($_POST['connexion'])){
      $mail = $_POST['mail'];
      $password = $_POST['password'];
      $data = getUserWithMail($mail);

      if (!$data){
          echo "Veuillez rentrer une adresse email valide";
      }else{
          $passwordIsOK = password_verify($password,$data['password']);

        if ($passwordIsOK){
            session_start();
            $_SESSION['usersId'] = $data['usersId'];
            $_SESSION['nom']=$data['nom'];
            $_SESSION['prenom']=$data['prenom'];
            $_SESSION['mail']=$data['mail'];
            $_SESSION['password']=$data['password'];

            $resultGetCourses = getCourses();
            $nb_courses = $resultGetCourses -> rowCount();
            require_once('views/profilView.php');
        }else{
            echo "Veuillez rentrer un mot de passe valide";
        }
    }
}

if (!isset($_SESSION['usersId'])){
    require_once('views/loginView.php');
}


}

function disconnect(){
    session_start();
    if (isset($_SESSION['usersId'])){
        session_unset();
        session_destroy();
        echo "Vous etes bien déconnectés";
    }else{
        echo "Vous n'est pas connectés";
    }

}