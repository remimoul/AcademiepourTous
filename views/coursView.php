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
        <button class="show-modal bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">

            Réserver
        </button>
        <div class="bottom-sheet">
            <div class="sheet-overlay"></div>
            <div class="content">
                <div class="header">
                    <div class="drag-icon"><span></span></div>
                </div>
                <div class="bodydrag">
                <h2>Bottom Sheet Modal</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ex ligula, egestas ac purus in, mattis maximus tellus. Sed turpis purus, consectetur id pulvinar ac, fermentum vel tellus. Pellentesque in libero mi. Maecenas auctor lobortis purus, eu viverra nibh maximus eu. Sed maximus eget nisi a tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum eu sapien bibendum, suscipit eros a, placerat eros. Nunc nec quam eu quam porttitor auctor nec nec lectus. Mauris molestie arcu urna, eu rutrum odio bibendum eget. Suspendisse id libero erat. Mauris mollis, nibh eget tincidunt efficitur, leo lacus laoreet ante, quis rutrum turpis massa non dolor. Vestibulum luctus congue massa, id tempor odio accumsan in. Etiam nisi ex, pharetra nec sollicitudin eget, rhoncus eu massa. Curabitur sagittis euismod lacus, finibus vulputate nisi. Phasellus dapibus nunc id neque commodo posuere nec nec leo.</p>
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
        <button class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">

            <a href="./views/contactView.php">Réserver  </a>
        </button>

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
const showModalBtn = document.querySelector(".show-modal");
const bottomSheet = document.querySelector(".bottom-sheet");
const sheetOverlay = bottomSheet.querySelector(".sheet-overlay");
const sheetContent = bottomSheet.querySelector(".content");
const dragIcon = bottomSheet.querySelector(".drag-icon");

// let isDragging = false;

const showBottomSheet = () => {
bottomSheet.classList.add("show");
}
const hideBottomSheet = () =>{
    bottomSheet.classList.remove("show");
}

// const dragStart = () => {
//     isDragging = true;
// }

const dragging = (e) =>{
    // if(!isDragging) return;
    sheetContent.style.height = `${e.pageY}vh`;
    console.log(e.pageY);
}

// dragIcon.addEventListener("mousedown",dragStart);
// dragIcon.addEventListener("mousedown",dragStart);
dragIcon.addEventListener("mousemove",dragging);
showModalBtn.addEventListener("click", showBottomSheet);
sheetOverlay.addEventListener("click",hideBottomSheet);

</script>

<?php

require ('footer.html');
?>


