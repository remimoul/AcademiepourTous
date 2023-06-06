<?php


require_once('models/database.php');

function adminAccount(){

    if (isset($_SESSION['usersId'])) {
        // Vérifier si l'utilisateur connecté est un administrateur
        $bddPDO = connexionBDD();
        $user_id = $_SESSION['usersId'];
        $requete = "SELECT * FROM users WHERE usersId = $user_id AND admin = 1";
        $result = $bddPDO->query($requete);

        if ($result->rowCount() > 0) {
            // L'utilisateur est un administrateur, afficher le bouton "Admin"
            echo '<li><a href="#" class="">Admin</a></li>';
        }
    }


}



