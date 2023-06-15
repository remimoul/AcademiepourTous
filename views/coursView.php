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
                    <form action="" method="POST">
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
                    <form action="" method="POST">
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
                    <form action="" method="POST">
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
                    <form action="" method="POST">
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
                    <form action="" method="POST">
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

</section>

<script>
    const showModalBtn = document.querySelectorAll(".show-modal");
    const closeBtn = document.querySelectorAll(".close-modal");
    const bottomSheets = document.querySelectorAll(".bottom-sheet");
    const sheetOverlays = document.querySelectorAll(".sheet-overlay");
    const sheetContents = document.querySelectorAll(".content");
    const dragIcons = document.querySelectorAll(".drag-icon");

    let isDragging = false;
    let startY, startHeight;

    const showBottomSheet = (event) => {
        const target = event.currentTarget.dataset.target;
        const bottomSheet = document.querySelector(target);
        bottomSheet.classList.add("show");
        updateSheetHeight(bottomSheet.querySelector(".content"), 50);
    }

    const hideBottomSheet = (event) => {
        const bottomSheet = event.currentTarget.closest(".bottom-sheet");
        if (bottomSheet) {
            bottomSheet.classList.remove("show");
            document.body.style.overflowY = "auto";
        }
    };

    const updateSheetHeight = (sheetContent, height) => {
        sheetContent.style.height = `${height}vh`;
        sheetContent.parentElement.classList.toggle("fullscreen", height === 100);
    }

    const dragStart = (event) => {
        const bottomSheet = event.currentTarget.closest(".bottom-sheet");
        if (bottomSheet) {
            bottomSheet.classList.add("dragging");
            startY = event.clientY || event.touches?.[0].clientY;
            startHeight = parseInt(bottomSheet.querySelector(".content").style.height);
            isDragging = true;
        }
    };

    const dragging = (event) => {
        if (!isDragging) return;
        const clientY = event.clientY || event.touches?.[0].clientY;
        const deltaY = clientY - startY;
        const newHeight = startHeight - deltaY / window.innerHeight * 100;
        bottomSheets.forEach((bottomSheet) => {
            if (bottomSheet.classList.contains("dragging")) {
                const sheetContent = bottomSheet.querySelector(".content");
                updateSheetHeight(sheetContent, newHeight);
            }
        });
    };

    const dragStop = (event) => {
        isDragging = false;
        bottomSheets.forEach((bottomSheet) => {
            if (bottomSheet.classList.contains("dragging")) {
                const sheetContent = bottomSheet.querySelector(".content");
                if (sheetContent && bottomSheet.contains(sheetContent)) {
                    const sheetHeight = parseInt(sheetContent.style.height);
                    if (sheetHeight < 25) {
                        hideBottomSheet(event);
                    } else if (sheetHeight > 75) {
                        updateSheetHeight(sheetContent, 100);
                    } else {
                        updateSheetHeight(sheetContent, 50);
                    }
                }
                bottomSheet.classList.remove("dragging");
            }
        });
    }

    showModalBtn.forEach((showModalBtn) => {
        showModalBtn.addEventListener("click", showBottomSheet);
    });

    closeBtn.forEach((closeBtn) => {
        closeBtn.addEventListener("click", hideBottomSheet);
    });

    sheetOverlays.forEach((sheetOverlay) => {
        sheetOverlay.addEventListener("click", hideBottomSheet);
    });

    bottomSheets.forEach((bottomSheet) => {
        const dragIcon = bottomSheet.querySelector(".drag-icon");
        dragIcon.addEventListener("mousedown", dragStart);
        dragIcon.addEventListener("touchstart", dragStart);
        window.addEventListener("mousemove", dragging);
        window.addEventListener("touchmove", dragging);
        window.addEventListener("mouseup", dragStop);
        window.addEventListener("touchend", dragStop);
    });

</script>

<?php

require ('footer.html');
?>


