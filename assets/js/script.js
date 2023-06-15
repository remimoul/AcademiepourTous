
// Initialization for ES Users
// import { Carousel, initTE,} from "tw-elements";
//
// initTE({ Carousel });


//---------------------------------------------------------------------------------------------------------------------------------//
//FONCTION QUI PERMET DE GERER LES BOTTOM MODALS DANS LE FICHIER COURSVIEW

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
//FIN DE LA FONCTION BOTTOM MODAL
//---------------------------------------------------------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------------------------------------------------------//

// fonction barre de menu mobile

function toggleMenu() {
    var menu = document.getElementById("navbar-default");
    menu.classList.toggle("hidden");
}

let menuToggle = document.querySelector('.navbar-menu-toggle');
menuToggle.addEventListener('click', toggleMenu);