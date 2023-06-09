<?php
require_once('header.php');
require_once('../models/oneUsersViewModel.php');
require_once('../models/reservationModel.php');
require_once ('../models/formStudentModel.php');


foreach ($users as $row) {
    ?>
    <h1 class=" text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl w-[90%] mx-[5%] px-4 py-4 flex items-center"><svg class="h-20 w-15 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>Bienvenue <?php echo $row['prenom'] ?></h1>
<h2 class="text-center text-2xl font-bold my-3 text-red-500">Informations du compte</h2>
<div class=' flex justify-center items-center'>
   <table class='text-xl w-[40%] text-gray-500 dark:text-gray-400'>


        <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 '>
           <th scope='col' class='px-6 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 '>
                Nom
           </th>
            <td class='px-6 py-3'>
               <?php echo $row['nom'] ?>
            </td>

        </tr>



        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="col" class="px-6 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                Prénom
           </th>
            <td class="px-6 py-4 ">
                <?php echo $row['prenom'] ?>
            </td>

        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="col" class="px-6 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                Mobile
            </th>
            <td class="px-6 py-4">
                <?php echo $row['mobile'] ?>
            </td>


        </tr>
        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="col" class="px-6 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                Mail
            </th>
            <td class="px-6 py-4">
                <?php echo $row['mail'] ?>
            </td>


       </tr>

       <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
           <th scope="col" class="px-6 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               Date d'inscription
           </th>
           <td class="px-6 py-4">
               <?php echo $row['inscriptionDate'] ?>
           </td>


       </tr>

   </table>

</div>


<?php } ?>




    <h1 class=" text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl w-[90%] mx-[5%] px-4 py-4 flex items-center"><svg class="h-20 w-20 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="7" r="4" />  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>Elèves</h1>

<!--    <a href="views/studentRegistrationFormView.php">Veuillez remplir le formulaire d'inscription</a>-->

<!--    <a href="studentRegistrationFormController/addOneStudent">Veuillez remplir le formulaire d'inscription</a>-->


<?php
if(empty($resultsform)){
    echo "<a href='studentRegistrationFormController/addOneStudent' class='text-2xl flex justify-center text-center'>Veuillez remplir le formulaire d'inscription</a>";
} else {

    echo '<div class="flex justify-center">';
    foreach ($resultsform as $resultsformusers){

        echo '<div class="items-center block max-w-[22rem] rounded-lg shadow-2xl">';
        echo '<div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init data-te-ripple-color="light">';
        echo "<img class='rounded-t-lg' src='$resultsformusers[photoeleve]' width='280'/>";
//        echo '<a href="#!">';
        echo '<div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>';
        echo '</a>';
        echo '</div>';
        echo '<div class="p-6">';
        echo "<h5 class='mb-4 text-4xl font-medium leading-tight text-neutral-800 '> $resultsformusers[name_student] $resultsformusers[lastname_student] </h5>";
        echo "<p class='mb-1'>Année Scolaire : $resultsformusers[annee_scolaire] </p>";
        echo "<p class='mb-1'>Niveau : $resultsformusers[niveau] </p>";
        echo "<p class='mb-1'>Etablissement : $resultsformusers[etablissement] </p>";
        echo "<p class='mb-1'>Classe : $resultsformusers[classe] </p>";
        echo "<p class='mb-1'>Sexe : $resultsformusers[sexe] </p>";
        echo "<p class='mb-1'>Nationalité : $resultsformusers[nationalite] </p>";
        echo "<p class='mb-1'>Date de Naissance : $resultsformusers[lieu] </p>";
        echo "<p class='mb-1'>Adresse : $resultsformusers[adresse_student] </p>";
        echo "<p class='mb-1'>Code Postal : $resultsformusers[postal_student] </p>";
        echo "<p class='mb-1'>Commune : $resultsformusers[commune_student] </p>";
        echo '</div>';
        echo '</div>';



    echo '</div>';



    echo "<h1 class=' text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl w-[90%] mx-[5%] px-4 py-4 flex items-center'>
       <svg class='h-20 w-20 text-white'  width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'> 
       <path stroke='none' d='M0 0h24v24H0z'/><circle cx='12' cy='7' r='4' /><path d='M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2'/></svg>Responsables de l'élève</h1>";
    echo "<div class='container mx-auto border border-gray-300 w-[90%] mx-[5%] rounded-lg'>";
    echo "<div class='flex items-center justify-between bg-gray-300 border-b border-gray-300 px-4 py-3'>";
    echo "<h4 class='text-lg font-semibold'>$resultsformusers[nom_resp] $resultsformusers[prenom_resp]</h4>";
    echo "</div>";

    echo "<ul class='divide-y divide-gray-200 mx-[2%]'>";
    echo "<li class='py-3'> ";
    echo "<div class='flex items-center'>";
    echo "<span>Père : $resultsformusers[pere]</span>";
    echo "</div>";
    echo "</li>";
    echo "<li class='py-3'> ";
    echo "<div class='flex items-center'>";
    echo "<span>Mère : $resultsformusers[mere]</span>";
    echo "</div>";
    echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Tuteur : $resultsformusers[tuteur]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Autre : $resultsformusers[autre]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Profession : $resultsformusers[profession]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Situation : $resultsformusers[situation]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Adresse : $resultsformusers[adresse_resp]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Code Postal : $resultsformusers[postal_resp]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Commune : $resultsformusers[commune_resp]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span> Téléphone fixe : $resultsformusers[phone]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Téléphone Portable $resultsformusers[mobile]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Téléphone Professionnel : $resultsformusers[mobilepro]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Adresse Email : $resultsformusers[mail]</span>";
        echo "</div>";
        echo "</li>";
        echo "<li class='py-3'> ";
        echo "<div class='flex items-center'>";
        echo "<span>Commentaire :  $resultsformusers[urgent]</span>";
        echo "</div>";
        echo "</li>";
     echo "</ul>" ;
echo "</div> ";

    }
}

?>


    <h1 class=" text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl w-[90%] mx-[5%] px-4 py-4 flex items-center"><svg class="h-20 w-20 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M4 13a8 8 0 0 1 7 7a6 6 0 0 0 3 -5a9 9 0 0 0 6 -8a3 3 0 0 0 -3 -3a9 9 0 0 0 -8 6a6 6 0 0 0 -5 3" />  <path d="M7 14a6 6 0 0 0 -3 6a6 6 0 0 0 6 -3" />  <circle cx="15" cy="9" r="1"  /></svg>Mes reservations</h1>

<?php

require_once '../controllers/deleteController.php';


if (empty($reservation)){
    echo"<h1 class='text-3xl font-bold text-center my-12'>Aucune réservation enregistré</h1>";
}else {
    
    if (isset($results)) {

        echo "<div class='relative overflow-x-auto sm:rounded-lg flex justify-center items-center my-10'>";
        echo "<table class='text-xl w-[40%] text-left text-gray-500 dark:text-gray-400'>";
        echo "<thead class='text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>";
        echo "<tr>";
        echo "<th class='px-6 py-3'>Cours Code</th>";
        echo "<th class='px-6 py-3'>
                <div class='flex items-center'>
                        Catégorie
                    <a href='#'><svg xmlns='http://www.w3.org/2000/svg' class='-3 h-3 ml-1' aria-hidden='true' fill='currentColor' viewBox='0 0 320 512'><path d='M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z'/></svg></a>
                </div>
                </th> ";
        echo "<th class='px-6 py-3'>";
        echo "<div class='flex items-center'>
                        Date de reservation
                    <a href='#'><svg xmlns='http://www.w3.org/2000/svg' class='w-3 h-3 ml-1' aria-hidden='true' fill='currentColor' viewBox='0 0 320 512'><path d='M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z'/></svg></a>
             </div>";
        echo "</th>";

        echo "<th class='px-6 py-3'>";
        echo "<span class='sr-only'>Edit</span>";
        echo "</th>";
        echo "</tr>";
        echo "</thead>";

        foreach ($reservation as $oneusers) {

            echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>";
            echo "<td class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>$oneusers[coursesId]</td>";
            echo "<td class='px-6 py-4'> $oneusers[coursesTitle]</td> ";
            echo "<td class='px-6 py-4'> $oneusers[reservationDate]</td>";
            echo "<td class='px-6 py-4 text-right'>";
            echo "<form method='post'>";
            echo "<button type='submit' name='delete_reservation' class='inline-block rounded bg-red-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]'>Supprimer</button></td>";
            echo "<input type='hidden' name='delete_reservation' value='$oneusers[id]'>";


            echo "</tr>";
            deletecours($reservation);

        }

        echo "</table>";
        echo " </div>";

    }

}    ?>

<?php require('footer.html');
