<?php
require_once('database.php');

function adminAccount(){

    if (isset($_SESSION['usersId'])) {
        // Vérifier si l'utilisateur connecté est un administrateur
        $bddPDO = connexionBDD();
        $user_id = $_SESSION['usersId'];
        $requete = "SELECT * FROM users WHERE usersId = $user_id AND admin = 1";
        $result = $bddPDO->query($requete);

        if ($result->rowCount() > 0) {
            // L'utilisateur est un administrateur, afficher le bouton "Admin"
            echo '<li><a href="./views/adminView.php" 
            class="block py-2 pl-3 pr-4 text-gray-900 
                   rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 
                   md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-yellow-500 
                   dark:hover:bg-amber-400 dark:hover:text-white md:dark:hover:bg-transparent">⭐ ADMIN ⭐</a></li>';
        }
    }
}



