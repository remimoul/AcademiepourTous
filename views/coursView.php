<?php
require('header.php');
?>
<style>
    .bodydrag{
        background: #E3F2FD;
    }

    .bottom-sheet {
        position:fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        opacity: 0;
        pointer-events: none;
        flex-direction: column;
        justify-content: end;
        align-items: center;
        transition: 0.1s linear;
    }

    .bottom-sheet.show{
        opacity: 1;
        pointer-events: auto;
    }

    .bottom-sheet .sheet-overlay{
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        opacity: 0.2;
        background: black;
    }

    .bottom-sheet .content{
        background: #fff;
        height: 50vh;
        max-height: 100vh;
        padding: 25px 30px;
        width: 100%;
        max-width: 1100px;
        border-radius:12px 12px 0 0;
        position: relative;
        transform: translateY(100%);
        transition: 0.3s ease;
    }

    .bottom-sheet.show .content{
        transform: translateY(0%);
    }

    .bottom-sheet.dragging .content{
        transition: none;
    }

    .bottom-sheet.fullscreen .content{
        border-radius: 0;
        overflow-y: hidden;
    }

    .bottom-sheet .header{
        display: flex;
        justify-content: center;
    }

    .bottom-sheet .drag-icon{
        cursor: grab;
        user-select: none;
        padding: 15px;
        margin-top: -15px;
    }

    .bottom-sheet .drag-icon span{
        height: 4px;
        width: 40px;
        display: block;
        background: #C7D0E1;
        border-radius:50px;
    }

    .bottom-sheet .bodydrag {
        overflow-y:auto;
        height: 100%;
        padding: 15px 0 40px;
        scrollbar-width: none;
    }

    .bottom-sheet .bodydrag::-webkit-scrollbar{
        width: 0;
    }

    .bottom-sheet .bodydrag h2{
        font-size: 1.8rem;
    }
    .bottom-sheet .bodydrag p{
        font-size: 1.05rem;
        margin-top: 20px;
    }


</style>

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
                    <form action="./process-form.php" method="POST">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">E-mail :</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Message :</label>
                        <textarea id="message" name="message" required></textarea>

                        <button type="submit">Envoyer</button>
                    </form>
                    <button class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">

                        <a href="./views/contactView.php">Réserver  </a>
                    </button>

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
                    <div class="drag-icon"><span></span></div>
                </div>
                <div class="bodydrag">
                    <h2>Mathématiques</h2>
                    <form action="./process-form.php" method="POST">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">E-mail :</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Message :</label>
                        <textarea id="message" name="message" required></textarea>

                        <button type="submit">Envoyer</button>
                    </form>
                    <button class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">

                        <a href="./views/contactView.php">Réserver  </a>
                    </button>
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
        <button class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">

            <a href="./views/contactView.php">Réserver  </a>
        </button>
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
        <button class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">

            <a href="./views/contactView.php">Réserver  </a>
        </button>

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
        <button class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">

            <a href="./views/contactView.php">Réserver  </a>
        </button>

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
        <button class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">

            <a href="./views/contactView.php">Réserver  </a>
        </button>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mx-4"> Tél : 06 11 01 60 83</span>
    </div>
</div>

</section>

<script>
const showModalBtn = document.querySelectorAll(".show-modal");
const bottomSheet = document.querySelector(".bottom-sheet");
const sheetOverlay = bottomSheet.querySelector(".sheet-overlay");
const sheetContent = bottomSheet.querySelector(".content");
const dragIcon = bottomSheet.querySelector(".drag-icon");

let isDragging = false,startY, startHeight;

const showBottomSheet = () => {
    bottomSheet.classList.add("show");
    updateSheetHeight(50);
}


const hideBottomSheet = () => {
    // bottomSheet.classList.remove("show","modal");
    const modals = document.querySelectorAll(".show .modal"); // Sélectionnez tous les modals qui ont la classe "show"
    modals.forEach(function(modal) {
        modal.classList.remove("show"); // Supprimez la classe "show" de chaque modal
    });
    bottomSheet.classList.remove("show"); // Supprime la classe "show" du fond de la feuille

    document.body.style.overflowY = "auto";
}

const updateSheetHeight = (height) => {
    sheetContent.style.height = `${height}vh`;
    bottomSheet.classList.toggle("fullscreen", height === 100);
}

const dragStart = (e) => {
    isDragging = true;
    startY = e.pageY || e.touches?.[0].pageY;
    startHeight = parseInt(sheetContent.style.height);
    bottomSheet.classList.add("dragging");
}

const dragging = (e) => {
    if(!isDragging) return;
    const delta = startY - (e.pageY || e.touches?.[0].pageY);
    const newHeight = startHeight + delta / window.innerHeight * 100;
    updateSheetHeight(newHeight);
}

const dragStop = () => {
    isDragging = false;
    bottomSheet.classList.remove("dragging");
    const sheetHeight = parseInt(sheetContent.style.height);
    sheetHeight < 25 ? hideBottomSheet() : sheetHeight > 75 ? updateSheetHeight(100) : updateSheetHeight(50);
}

document.addEventListener("mouseup", dragStop);
dragIcon.addEventListener("mousedown", dragStart);
document.addEventListener("mousemove", dragging);

document.addEventListener("touchend", dragStop);
dragIcon.addEventListener("touchstart", dragStart);
document.addEventListener("touchmove", dragging);

sheetOverlay.addEventListener("click", hideBottomSheet);

for (let i = 0; i < showModalBtn.length; i++) {
    showModalBtn[i].addEventListener("click", function() {
        const modalTarget = this.dataset.target;
        const modal = document.querySelector(modalTarget);
        modal.classList.add("show", "modal");
        showBottomSheet(); // Appel de la fonction pour afficher la fenêtre modale
    });
}

</script>

<!--<script>-->
<!---->
<!--    const modalButtons = document.querySelectorAll('.show-modal');-->
<!--    const bottomSheet = document.querySelector('.bottom-sheet');-->
<!--    const sheetOverlay = bottomSheet.querySelector('.sheet-overlay');-->
<!--    const sheetContent = bottomSheet.querySelector('.content');-->
<!---->
<!--    modalButtons.forEach(modalButton => {-->
<!--        modalButton.addEventListener('click', event => {-->
<!--            event.stopPropagation(); // Empêche la propagation de l'événement-->
<!--            const target = modalButton.dataset.target;-->
<!--            const modal = document.querySelector(target);-->
<!--            modal.classList.add('show');-->
<!--            bottomSheet.classList.add('show');-->
<!--        });-->
<!--    });-->
<!---->
<!--    bottomSheet.addEventListener('click', event => {-->
<!--        event.stopPropagation(); // Empêche la propagation de l'événement-->
<!--        if (event.target === sheetOverlay || event.target.classList.contains('modal-close')) {-->
<!--            const activeModals = bottomSheet.querySelectorAll('.modal.show');-->
<!--            activeModals.forEach(modal => modal.classList.remove('show'));-->
<!--            if (activeModals.length === 0) {-->
<!--                bottomSheet.classList.remove('show');-->
<!--            }-->
<!--        }-->
<!--    });-->
<!---->
<!--    sheetContent.addEventListener('click', event => {-->
<!--        event.stopPropagation(); // Empêche la propagation de l'événement-->
<!--    });-->
<!---->
<!--    const modals = bottomSheet.querySelectorAll('.modal');-->
<!--    modals.forEach(modal => {-->
<!--        modal.addEventListener('click', event => {-->
<!--            event.stopPropagation(); // Empêche la propagation de l'événement-->
<!--            if (event.target === modal || event.target.classList.contains('modal-close')) {-->
<!--                modal.classList.remove('show');-->
<!--                const activeModals = bottomSheet.querySelectorAll('.modal.show');-->
<!--                if (activeModals.length === 0) {-->
<!--                    bottomSheet.classList.remove('show');-->
<!--                }-->
<!--            }-->
<!--        });-->
<!---->
<!--        modal.querySelectorAll('.modal-content, .modal-header, .modal-footer').forEach(content => {-->
<!--            content.addEventListener('click', event => {-->
<!--                event.stopPropagation(); // Empêche la propagation de l'événement-->
<!--            });-->
<!--        });-->
<!--    });-->
<!---->
<!--</script>-->

<?php

require ('footer.html');
?>


