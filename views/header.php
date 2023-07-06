<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/AcademiepourTous/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/AcademiepourTous/assets/css/styleaca.css">
    <script defer src="/AcademiepourTous/assets/js/script.js"></script>
    <title>Accueil - L'academie pour tous</title>
</head>


<header>
    <div class="mx-5 my-5">
        <a href="#" class="flex items-center">
            <img src="assets/image/Logo.png" class="h-13 mr-3 h-24 hover:text-red-700"/>
                        <span class="self-center md:text-3xl font-semibold whitespace-nowrap text-rose-900 ">L'ACADEMIE POUR TOUS</span>
        </a>
    </div>
    <!-- <h1 class="m-3 border-4 border-red-600"> 06 11 01 60 83</h1> -->
    <nav class="navbar">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <button data-collapse-toggle="navbar-default" type="button" class="navbar-menu-toggle inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden md:block w-full md:w-auto navbar-menu navbar-menu-toggle" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Accueil</a>
                    </li>
                    <li>
                        <a href="./views/coursView.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Nos cours</a>
                    </li>
                    <li>
                        <a href="./views/stageView.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Stages intensifs</a>
                    </li>
                    <li>
                        <a href="./views/whoAreWeView.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Qui sommes-nous ?</a>
                    </li>
                    <li>
                        <a href="./views/contactView.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>

                    <?php if (!isset($_SESSION['usersId'])) { ?>

                    <li>
                        <a href="signupController/addOneUsers" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent">Inscription</a>
                    </li>

                    <?php } else { ?>
                    <li>
                        <a href="./views/myaccountView.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent">Mon Compte</a>
                    </li>

                    <?php } ?>

                    <?php if (isset($_SESSION['usersId'])) { ?>

                    <li>
                        <a href="loginController/disconnect" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-red-700 dark:hover:text-white md:dark:hover:bg-transparent">Déconnexion</a>
                    </li>
                    <?php } else { ?>
                    <li>
                        <a href="loginController/connexion" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent">Connexion</a>
                    </li>
                    <?php } ?>


                    <?php if (isset($_SESSION['usersId'])) {
                        $bddPDO = new mysqli("localhost", "root", "", "academie");
                    $user_id = $_SESSION['usersId'];
                    $requete = "SELECT * FROM users WHERE usersId = $user_id AND admin = 1";
                    $result = $bddPDO->query($requete);

                    if ($result->num_rows > 0) {
                    // L'utilisateur est un administrateur, afficher le bouton "Admin"
                    echo '<li><a href="./views/adminView.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-amber-400 dark:hover:text-white md:dark:hover:bg-transparent">⭐ ADMIN ⭐</a></li>';
                    }
                    }


                    ?>

                </ul>
            </div>
        </div>
    </nav>
</header>
