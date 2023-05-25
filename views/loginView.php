<?php
require('header.html');
?>

<!--<section>-->
<!--    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">-->
<!--        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">-->
<!--            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">-->
<!--                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">-->
<!--                    Connectez-vous à votre compte-->
<!--                </h1>-->
<!--                <form class="space-y-4 md:space-y-6" action="#">-->
<!--                    <div>-->
<!--                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre email</label>-->
<!--                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="votremail@gmail.com" required="">-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>-->
<!--                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">-->
<!--                    </div>-->
<!--                    <div class="flex items-center justify-between">-->
<!--                        <div class="flex items-start">-->
<!--                            <div class="flex items-center h-5">-->
<!--                                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">-->
<!--                            </div>-->
<!--                            <div class="ml-3 text-sm">-->
<!--                                <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-red-500">Mot de passe oublié?</a>-->
<!--                    </div>-->
<!--                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Connexion</button>-->
<!--                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">-->
<!--                        Vous n'avez pas encore de compte? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">S'inscrire</a>-->
<!--                    </p>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
    <div class="container h-full p-10">
        <div
            class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full">
                <div
                    class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                    <div class="g-0 lg:flex lg:flex-wrap">
                        <!-- Left column container-->
                        <div class="px-4 md:px-0 lg:w-full">
                            <div class="md:mx-6 md:p-12">
                                <!--Logo-->
                                <div class="text-center">
                                    <img
                                        class="mx-auto w-48"
                                        src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                        alt="logo" />
                                    <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                        Connectez-vous à votre compte
                                    </h4>
                                </div>

                                <form>
                                    <p class="mb-4">Veuillez vous connecter à votre compte</p>
                                    <!--Username input-->
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <input
                                            type="text"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            id="exampleFormControlInput1"
                                            placeholder="Username" />
                                        <label
                                            for="exampleFormControlInput1"
                                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                        >Email
                                        </label>
                                    </div>

                                    <!--Password input-->
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <input
                                            type="password"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            id="exampleFormControlInput11"
                                            placeholder="Password" />
                                        <label
                                            for="exampleFormControlInput11"
                                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                        >Mot de passe
                                        </label>
                                    </div>

                                    <!--Submit button-->
                                    <div class="mb-12 pb-1 pt-1 text-center">
                                        <button
                                            class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                            type="button"
                                            data-te-ripple-init
                                            data-te-ripple-color="light"
                                            style="
                        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                      ">
                                            Connexion
                                        </button>

                                        <!--Forgot password link-->
                                        <a href="#!">Mot de passe oublié ?</a>
                                    </div>

                                    <!--Register button-->
                                    <div class="flex items-center justify-between pb-6">
                                        <p class="mb-0 mr-2">Vous n'avez pas de compte?</p>
                                        <button
                                            type="button"
                                            class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                            data-te-ripple-init
                                            data-te-ripple-color="light">
                                            S'inscrire
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Right column container with background and description-->
<!--                        <div-->
<!--                            class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"-->
<!--                            style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)">-->
<!--                            <div class="px-4 py-6 text-white md:mx-6 md:p-12">-->
<!--                                <h4 class="mb-6 text-xl font-semibold">-->
<!--                                    Des enseignants passionnés pour aider les enfants à progresser-->
<!--                                </h4>-->
<!--                                <p class="text-sm">-->
<!--                                    Notre site de soutien scolaire propose diverses ressources pédagogiques pour aider les élèves à réussir à l'école. Nous mettons à disposition des contenus dans différentes matières, tels que les mathématiques, le français, l'anglais, la physique, la chimie, etc. Nos contenus sont élaborés par des enseignants qualifiés et expérimentés, qui ont à cœur de transmettre leur savoir et leur passion pour l'apprentissage. Nous proposons également des exercices pratiques, des quiz et des tests pour permettre aux élèves de s'entraîner et de mesurer leurs progrès. Notre site de soutien scolaire est accessible en tout temps, ce qui permet aux élèves de travailler à leur rythme et de progresser à leur propre niveau. Nous sommes convaincus que notre site de soutien scolaire peut aider les élèves à améliorer leurs résultats scolaires et à prendre confiance en eux.-->
<!--                                </p>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>