<?php
require('header.php');
require ('../models/oneUsersViewModel.php');
require ('../models/reservationModel.php');

foreach ($users as $row) {
    ?>

        <h1 class="text-6xl font-bold text-left my-12 mx-12">Bienvenue <?php echo $row['prenom'] ?> </h1>
<h2 class="text-center text-2xl font-bold my-3 text-red-500">Mes informations</h2>
<div class=' flex justify-center items-center'>
   <table class='text-xl w-[40%] text-gray-500 dark:text-gray-400'>


        <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
           <th scope='col' class='px-6 py-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>
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


<h1 class="text-6xl font-bold text-center my-12">Mes réservations</h1>


    <div class="relative overflow-x-auto sm:rounded-lg flex justify-center items-center my-10">
        <table class="text-xl w-[40%] text-left text-gray-500 dark:text-gray-400">
            <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Cours
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Catégorie
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Date de reservation
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>

            <?php foreach ($reservation as $oneusers) { ?>

           <?php echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>"?>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Test
                </th>


                    <?php echo "<td class='px-6 py-4'> $oneusers[coursesId]</td> "; ?>


                    <?php echo "<td class='px-6 py-4'> $oneusers[reservationDate]</td> "?>


                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
           <?php echo"</tr>"?>



   <?php echo"</table>" ?>
    </div>

<?php } ?>



<?php require('footer.html');
