<?php
include('header.php');
?>

<h1 class="text-6xl font-bold text-center my-12">Voici les cours que nous proposons &#128516;</h1>

<section class="flex flex-wrap my-16 justify-center">

<div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-8">
    <img class="w-full" src="assets/image/flower.webp" alt="Aide aux devoirs?">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Aide aux devoirs</div>
        <p class="text-gray-700 text-base">
            Aider les élèves dans leurs devoirs scolaires,
            à comprendre les concepts difficiles, à organiser leur travail et à développer des compétences d'étude efficaces.
        </p>
    </div>

    <div class="px-6 pt-4 pb-2">
        <button class="show-modal bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" data-target="#aide-aux-devoirs-form">Réserver</button>
        <div class="bottom-sheet" id="aide-aux-devoirs-form">
            <div class="sheet-overlay"></div>
            <div class="content">
                <div class="header">
                    <div class="drag-icon"><span></span></div>
                </div>
                <div class="bodydrag">
                <h2>Aide aux devoirs</h2>
                    <form action="reservationCoursesController/addNewOneCourses" method="POST">

                        <input type="hidden" id="usersId" name="usersId"  value="<?php
                        if (!isset($_SESSION['usersId'])){
                            echo "Connectez-vous pour reserver!";
                        }else{
                            echo $_SESSION['usersId'];
                        }
                         ?>">
                        <input type="hidden" id="coursesId" name="coursesId" value="3">
                        <label for="date">Votre date de reservation :</label>
                        <input type="date" id="reservationDate" name="reservationDate" required>
                        <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
                    </form>

            </div>
        </div>
    </div>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mx-4"> Tél : 06 11 01 60 83</span>
    </div>
</div>

<div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-8">
    <img class="w-full" src="assets/image/bird1.webp" alt="Mathématiques?">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Mathématiques</div>
        <p class="text-gray-700 text-base">
            Comprendre les concepts mathématiques fondamentaux, à résoudre des problèmes mathématiques complexes et à se préparer pour des examens de mathématiques.
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <button class="show-modal bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" data-target="#maths">Réserver</button>
        <div class="bottom-sheet" id="maths">
            <div class="sheet-overlay show.modal"></div>
            <div class="content">
                <div class="header">
                    <div class="drag-icon"><span>Rester appuyez dessus et tirer</span></div>
                </div>
                <div class="bodydrag">
                    <h2>Mathématiques</h2>
                    <form action="reservationCoursesController/addNewOneCourses" method="POST">
                            <input type="hidden" id="usersId" name="usersId"  value="<?php echo $_SESSION['usersId']; ?>">
                            <input type="hidden" id="coursesId" name="coursesId" value="2">
                            <label for="date">Votre date de reservation :</label>
                            <input type="date" id="reservationDate" name="reservationDate" required>
                            <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
                    </form>

                </div>
            </div>
        </div>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mx-4"> Tél : 06 11 01 60 83</span>
    </div>
</div>

<div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-8">
    <img class="w-full" src="assets/image/bird2.webp" alt="Physique-Chimie?">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Physique-Chimie</div>
        <p class="text-gray-700 text-base">

            Concepts scientifiques fondamentaux, à résoudre des problèmes scientifiques complexes et à se préparer pour des examens de physique et de chimie.
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <button class="show-modal bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" data-target="#Physique-Chimie">
           Réserver
        </button>

        <div class="bottom-sheet" id="Physique-Chimie">
            <div class="sheet-overlay show.modal"></div>
            <div class="content">
                <div class="header">
                    <div class="drag-icon"><span></span></div>
                </div>
                <div class="bodydrag">
                    <h2>Physique-Chimie</h2>
                    <form action="reservationCoursesController/addNewOneCourses" method="POST">
                        <input type="hidden" id="usersId" name="usersId"  value="<?php echo $_SESSION['usersId']; ?>">
                        <input type="hidden" id="coursesId" name="coursesId" value="4">
                        <label for="date">Votre date de reservation :</label>
                        <input type="date" id="reservationDate" name="reservationDate" required>
                        <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mx-4"> Tél : 06 11 01 60 83</span>
    </div>
</div>



<div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-8">
    <img class="w-full" src="assets/image/panther.webp" alt="Français?">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Français</div>
        <p class="text-gray-700 text-base">
            Cours de soutien pour la langue française.
            Aider les élèves à améliorer leur grammaire, leur vocabulaire, leur compréhension écrite et orale, et à se préparer pour des examensde français.
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <button class="show-modal bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" data-target="#Français">
            Réserver
        </button>

        <div class="bottom-sheet" id="Français">
            <div class="sheet-overlay show.modal"></div>
            <div class="content">
                <div class="header">
                    <div class="drag-icon"><span></span></div>
                </div>
                <div class="bodydrag">
                    <h2>Français</h2>
                    <form action="reservationCoursesController/addNewOneCourses" method="POST">
                        <input type="hidden" id="usersId" name="usersId"  value="<?php echo $_SESSION['usersId']; ?>">
                        <input type="hidden" id="coursesId" name="coursesId" value="1">
                        <label for="date">Votre date de reservation :</label>
                        <input type="date" id="reservationDate" name="reservationDate" required>
                        <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>

        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mx-4"> Tél : 06 11 01 60 83</span>
    </div>
</div>

<div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-8">
    <img class="w-full" src="assets/image/nature.jpg" alt="Anglais?">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Anglais</div>
        <p class="text-gray-700 text-base">
            Cours de soutien pour la langue anglaise.<br>
            Aider les élèves à améliorer leur grammaire, leur vocabulaire, leur compréhension écrite et orale, leur prononciation et à se préparer pour des examens d'anglais.
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <button class="show-modal bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" data-target="#Anglais">
            Réserver
        </button>

        <div class="bottom-sheet" id="Anglais">
            <div class="sheet-overlay show.modal"></div>
            <div class="content">
                <div class="header">
                    <div class="drag-icon"><span></span></div>
                </div>
                <div class="bodydrag">
                    <h2>Anglais</h2>
                    <form action="reservationCoursesController/addNewOneCourses" method="POST">
                        <input type="hidden" id="usersId" name="usersId"  value="<?php echo $_SESSION['usersId']; ?>">
                        <input type="hidden" id="coursesId" name="coursesId" value="5">
                        <label for="date">Votre date de reservation :</label>
                        <input type="date" id="reservationDate" name="reservationDate" required>
                        <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>

        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mx-4"> Tél : 06 11 01 60 83</span>
    </div>
</div>

<div class="max-w-sm mx-auto rounded overflow-hidden shadow-lg my-8">
    <img class="w-full" src="assets/image/cat.jpg" alt="Economie?">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Economie</div>
        <p class="text-gray-700 text-base">
            Cours de soutien pour l'économie.<br>
            Aider les élèves à comprendre les concepts économiques fondamentaux, à résoudre des problèmes économiques complexes et à se préparer pour des examens d'économie.
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <button class="show-modal bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" data-target="#Economie">
            Réserver
        </button>

        <div class="bottom-sheet" id="Economie">
            <div class="sheet-overlay show.modal"></div>
            <div class="content">
                <div class="header">
                    <div class="drag-icon"><span></span></div>
                </div>
                <div class="bodydrag">
                    <h2>Economie</h2>
                    <form action="reservationCoursesController/addNewOneCourses" method="POST">
                        <input type="hidden" id="usersId" name="usersId"  value="<?php echo $_SESSION['usersId']; ?>">
                        <input type="hidden" id="coursesId" name="coursesId" value="6">
                        <label for="date">Votre date de reservation :</label>
                        <input type="date" id="reservationDate" name="reservationDate" required>
                        <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mx-4"> Tél : 06 11 01 60 83</span>
    </div>
</div>

</section>

<?php

require ('footer.html');
?>


