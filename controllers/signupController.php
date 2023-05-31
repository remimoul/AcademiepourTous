<?php
require_once('models/registration.php');

function addNewUsers($nom, $prenom,$mail, $password){

    $resultAddOneUsers = addUser($nom, $prenom,$mail,$password);

    if(!$resultAddOneUsers){
        $message = "Un problème est survenu, l'enregistrement n'a pas été effectué !";

    }else{

        echo "<script type = \"text/javascript\"> alert('Compte bien crée')</script>";

    }

}

function addOneUsers(){

    if (isset($_POST['saveUser'])){
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['password']))
        {
            if (!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){

                echo "Entrez une adresse email valide";
            }elseif ($_POST['password'] != $_POST['password2']){
                echo "Les mots de passe ne correspondent pas";
            }elseif ($_POST['mail'] != $_POST['mail2']){
                echo "L'adresse mail ne correspond pas";
            }
            else{
                $data = getUserWithMail($_POST['mail']);

                if ($data){
                    echo "Un compte existe déja avec cette adresse mail";
                }else{
                    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
                    addNewUsers($_POST['nom'],$_POST['prenom'],$_POST['mail'],$password);
                }
            }


        }

    }else{
        echo "Tous les champs sont requis";
    }

    require_once ('views/signupView.php');

}