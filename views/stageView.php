<?php
require('header.php');
?>

<style>
    .colorintro{
        text-shadow: 1px 1px 0 #000000;
    }
</style>

<div class="relative my-4">
<img src="assets/image/stagepage.webp" class="w-full h-[512px] object-cover"/>
    <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center flex-col">
<h1 class="text-4xl font-bold text-center my-12 text-white colorintro">Stages intensifs pour réussir le brevet et le baccalauréat</h1>
<p class="text-xl text-center my-12 text-white colorintro">Vous cherchez une solution efficace pour préparer vos examens du brevet ou du baccalauréat ?<br>
    Nos stages intensifs sont la clé de votre réussite !<br>
    Nos enseignants expérimentés et passionnés vous accompagnent dans votre préparation pour vous permettre d'obtenir les meilleurs résultats possibles.</p>

    </div>
</div>

<!--1ere partie-->

<div class="flex items-center w-full">
<div class="w-1/2">
    <img src="assets/image/glasses-book.jpg" class="w-full h-[512px] ">
</div>
    <div class="text-center w-1/2">
        <h1 class="text-3xl font-bold">STAGE INTENSIF - Spécial Brevet</h1>
        <p>
            Pendant toute l'année : <br>
            <ul>
            <li>Sciences Physique-Chimie </li>
            <li>Mathématiques </li>
            <li>Histoire-Géographie</li>
            <li>Français</li>
        </ul>

        </p>
        <br>
        Par session de 2 heures

<br><br>
        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Réserver
        </button>

    </div>


</div>

<!--2eme partie-->

    <div class="flex w-full items-center mb-10">


        <div class="text-center w-1/2">
            <h1 class="text-3xl font-bold">STAGE INTENSIF - Spécial Baccalauréat</h1>
            <p>
                Pendant toute l'année : <br>
                Cours pour Sessions Générale et Technologique
            </p>
            <br>

            <br><br>
            <button href="./views/stageView.php" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                Réserver
            </button>

        </div>

        <div class="w-1/2">
            <img src="assets/image/influencer.jpg" class="w-full h-[512px]">
        </div>



    </div>

<?php
require ('footer.html');
?>