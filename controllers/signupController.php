<?php
require_once('models/registration.php');

function addNewUsers($nom, $prenom,$mail,$mobile,$password){

    $resultAddOneUsers = addUser($nom, $prenom,$mail,$mobile,$password);

    if(!$resultAddOneUsers){
        $message = "Un problème est survenu, l'enregistrement n'a pas été effectué !";

    }else{

        echo "<script type = \"text/javascript\"> alert('Compte bien crée')</script>";

    }

}

function addOneUsers(){

    if (isset($_POST['saveUser'])){
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['mobile']) && !empty($_POST['password']))
        {
            if (!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){

                echo "<script>alert('Entrez une adresse email valide')</script>";
            }elseif ($_POST['password'] != $_POST['password2']){
                echo "<script>alert('Les mots de passe ne correspondent pas')</script>";
            }elseif ($_POST['mail'] != $_POST['mail2']){
                echo "<script>alert('Ladresse mail ne correspond pas') </script> ";
            }
            else{
                $data = getUserWithMail($_POST['mail']);

                if ($data){
                    echo "<script>alert('Un compte existe déja avec cette adresse mail')</script> ";
                }else{
                    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
                    addNewUsers($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['mobile'], $password);
                }
            }


        }

    }

    require_once ('views/signupView.php');

}
//pt-[30rem] mx-[22%] z-[999] absolute
