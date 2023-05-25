<?php

require('header.html');


?>

<!---->
<!--<div class="carousel w-full">-->
<!--    <div id="slide1" class="carousel-item relative w-full">-->
<!--        <img src="assets/image/ecolier.webp" class="w-full" />-->
<!--        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">-->
<!--            <a href="#slide4" class="btn btn-circle">❮</a>-->
<!--            <a href="#slide2" class="btn btn-circle">❯</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div id="slide2" class="carousel-item relative w-full hidden">-->
<!--        <img src="assets/image/circle.webp" class="w-full" />-->
<!--        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">-->
<!--            <a href="#slide1" class="btn btn-circle">❮</a>-->
<!--            <a href="#slide3" class="btn btn-circle">❯</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div id="slide3" class="carousel-item relative w-full hidden">-->
<!--        <img src="assets/image/one.webp" class="w-full" />-->
<!--        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">-->
<!--            <a href="#slide2" class="btn btn-circle">❮</a>-->
<!--            <a href="#slide4" class="btn btn-circle">❯</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div id="slide4" class="carousel-item relative w-full hidden">-->
<!--        <img src="assets/image/two.webp" class="w-full" />-->
<!--        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">-->
<!--            <a href="#slide3" class="btn btn-circle">❮</a>-->
<!--            <a href="#slide1" class="btn btn-circle">❯</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!---->
<!--</html>-->


<section class="">
    <div
            id="carouselDarkVariant"
            class="relative max-w-3xl md:justify-center"
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
                class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <!-- First item -->
            <div
                    class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade
                    data-te-carousel-item
                    data-te-carousel-active>
                <img
                        src="assets/image/ecolier.webp"
                        class="block w-full"
                        alt="Motorbike Smoke" />
                <div
                        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                    <h5 class="text-xl">First slide label</h5>
                    <p>
                        Some representative placeholder content for the first slide.
                    </p>
                </div>
            </div>
            <!-- Second item -->
            <div
                    class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade
                    data-te-carousel-item>
                <img
                        src="assets/image/circle.webp"
                        class="block w-full"
                        alt="Mountaintop" />
                <div
                        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                    <h5 class="text-xl">Second slide label</h5>
                    <p>
                        Some representative placeholder content for the second slide.
                    </p>
                </div>
            </div>
            <!-- Third item -->
            <div
                    class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade
                    data-te-carousel-item>
                <img
                        src="assets/image/one.webp"
                        class="block w-full"
                        alt="Woman Reading a Book" />
                <div
                        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                    <h5 class="text-xl">Third slide label</h5>
                    <p>
                        Some representative placeholder content for the third slide.
                    </p>
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