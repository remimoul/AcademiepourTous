<?php
require('header.php');
require ('../models/oneUsersViewModel.php');
foreach ($users as $row){
    ?>

        <h1 class="text-6xl font-bold text-center my-12">Bienvenue <?php echo $row['prenom'] ?> </h1>

<div class='shadow-md sm:rounded-lg w-1/2'>
   <table class='w-full text-sm text-left text-gray-500 dark:text-gray-400'>


        <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
           <th scope='col' class='w-1/4 px-6 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>
                Nom
           </th>
            <td class='px-6 py-3'>
               <?php echo $row['nom'] ?>
            </td>

        </tr>"



        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="col" class="px-6 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                Prénom
           </th>
            <td class="px-6 py-4">
                <?php echo $row['prenom'] ?>
            </td>

        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="col" class="px-6 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                Mobile
            </th>
            <td class="px-6 py-4">
                Pour l'instant pas d'info dans la BDD
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

   </table>

</div>

    <?php }?>


