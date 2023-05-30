<?php

require('views/header.html');


?>

<section class="py-24 ">
<div
    id="carouselDarkVariant"
    class="relative px-[auto] "
    data-te-carousel-init
    data-te-carousel-slide>
    <!-- Carousel indicators -->
    <div
        class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
        data-te-carousel-indicators>
        <button
            data-te-target="#carouselDarkVariant"
            data-te-slide-to="0"
            data-te-carousel-active
            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
            aria-current="true"
            aria-label="Slide 1"></button>
        <button
            data-te-target="#carouselDarkVariant"
            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
            data-te-slide-to="1"
            aria-label="Slide 1"></button>
        <button
            data-te-target="#carouselDarkVariant"
            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
            data-te-slide-to="2"
            aria-label="Slide 1"></button>
    </div>

    <!-- Carousel items -->
    <div
        class="relative w-full max-h-[650px] overflow-hidden after:clear-both after:block after:content-['']">
        <!-- First item -->
        <div
            class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
            data-te-carousel-fade
            data-te-carousel-item
            data-te-carousel-active>
            <img
                src="assets/image/ecolier.webp"
                class="block w-full mx-auto"
                alt="Motorbike Smoke" />
            <div
                class="absolute top-0 left-0 w-full h-full flex justify-center items-center text-center text-red-700">
                <div class="flex flex-col justify-center items-center">
                <h5 class="text-xl mb-12">First slide label</h5>
                <p>
                    Some representative placeholder content for the first slide.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim.

                </p>
            </div>
        </div>
        </div>
        <!-- Second item -->
        <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
             data-te-carousel-fade
             data-te-carousel-item>
            <img src="assets/image/two.webp" class="block mx-auto w-full" alt="City Lights" />
            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center text-center hover:text-red-700">
                <div class="flex flex-col justify-center items-center">
                    <h5 class="text-xl mb-2">Second slide label</h5>
                    <p class="mt-0">Some representative placeholder content for the second slide.</p>
                </div>
            </div>
        </div>
        <!-- Third item -->
        <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
             data-te-carousel-fade
             data-te-carousel-item>
            <img src="assets/image/one.webp" class="block mx-auto w-full" alt="Dawn of Peace" />
            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center text-center text-white">
                <div class="flex flex-col justify-center items-center">
                    <h5 class="text-xl mb-2">Third slide label</h5>
                    <p class="mt-0">Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel controls - prev item-->
    <button
        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
        type="button"
        data-te-target="#carouselDarkVariant"
        data-te-slide="prev">
    <span class="inline-block h-8 w-8 dark:grayscale">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
        >Previous</span
        >
    </button>
    <!-- Carousel controls - next item-->
    <button
        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
        type="button"
        data-te-target="#carouselDarkVariant"
        data-te-slide="next">
    <span class="inline-block h-8 w-8 dark:grayscale">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
        >Next</span
        >
    </button>
</div>

</section>

<section class="text-black text-center w-1/2 mx-[25%]">

    <h2 class="my-4 text-red-400 text-3xl font-bold">DECOUVREZ L'ACADEMIE POUR TOUS</h2>


    <p>
        L'Académie Pour Tous est une association à but non lucratif (loi 1901) qui a pour but d’aider les élèves en difficultés scolaires.<br>
        Les cours se déroulent dans nos locaux du XIXème arrondissement de Paris et existent sous différents formats :
    </p>
    <ul>
        <br>
        <li>Ponctuels</li>
        <li>Suivi annuel</li>
        <li>En solo</li>
        <li>En duo</li>
        <li>En groupe</li>
    </ul>
    <p>
    <br>
    Nous offrons également aux jeunes neurotypiques et enfants atteints de troubles du spectre autistique
    <br>et troubles neuro-développementaux (TSA, TND et TDH) enseignements et accompagnement scolaire.

    </p>


</section>
<br><br>

<div class="grid grid-cols-2 gap-4">
    <div class="relative">
        <div class="absolute top-0 left-0 right-0 p-4  flex flex-col justify-center items-center">
            <h3 class="text-white text-2xl font-bold text-center">STAGES INTENSIFS <br> BAC & BREVET</h3>
        </div>
        <img src="assets/image/three.webp" alt="Image 1" />
        <div class="absolute bottom-0 flex justify-center left-0 right-0 p-4">
            <a href="./views/stageView.php" class="bg-red-700 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                En savoir plus
            </a>
        </div>
    </div>
    <div class="relative">
        <div class="absolute top-0 left-0 right-0 p-4  flex flex-col justify-center items-center">
            <h3 class="text-white text-2xl font-bold text-center">COURS DE SOUTIEN SCOLAIRE</h3>
        </div>
        <img src="assets/image/four.webp" alt="Image 2" />
        <div class="absolute bottom-0 flex justify-center left-0 right-0 p-4">
            <a href="./views/coursView.php" class="bg-red-700 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                S'inscrire
            </a>
        </div>
    </div>
</div>

</body>
<br><br><br>
<?php

require('views/footer.html');


?>



</html>