<?php
require('header.php');
?>

    <section class="gradient-form h-full bg-neutral-200 flex items-center justify-center min-h-[512px]">
        <div class="container p-10">
            <div
                    class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                <div class="w-full">
                    <div
                            class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                        <div class="g-0 lg:flex lg:flex-wrap">
                            <!-- Left column container-->
                            <div class="px-4 md:px-0 lg:w-6/12">
                                <div class="md:mx-6 md:p-12">
                                    <!--Logo-->
                                    <div class="text-center">
                                        <img
                                                class="mx-auto w-48"
                                                src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                                alt="logo" />
                                        <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                            Inscription à l'académie pour tous
                                        </h4>
                                    </div>

                                    <form  action="signupController/addOneUsers" method="post"  >
                                        <p class="mb-4">Veuillez remplir le formulaire d'inscription</p>

                                        <!--Username input-->

                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input
                                                    name="nom"
                                                    type="text"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="username1"
                                                    placeholder="Votre Nom" required/>
                                            <label
                                                    for="username1"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                            >Nom
                                            </label>
                                        </div>

                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input
                                                    name="prenom"
                                                    type="text"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="username2"
                                                    placeholder="Votre Prenom" required />
                                            <label
                                                    for="username2"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                            >Prénom
                                            </label>
                                        </div>

                                        <!--Email input-->
                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input
                                                    name="mail"
                                                    type="text"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="Email1"
                                                    placeholder="Email" required />
                                            <label
                                                    for="email1"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                            >Email
                                            </label>
                                        </div>

                                        <!--Confirm email-->
                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input
                                                    name="mail2"
                                                    type="text"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="Email2"
                                                    placeholder="Confirm Email" required />
                                            <label
                                                    for="email2"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                            >Confirmer votre Email
                                            </label>
                                        </div>


                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input
                                                    name="mobile"
                                                    type="text"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="mobile"
                                                    placeholder="Numéro de téléphone"/>
                                            <label
                                                    for="mobile"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                            >Numéro de téléphone
                                            </label>
                                        </div>


                                        <!--Password input-->
                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input
                                                    name="password"
                                                    type="password"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="password"
                                                    placeholder="Password"  required/>
                                            <label
                                                    for="password1"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                            >Mot de passe
                                            </label>
                                        </div>
                                        <!--Confirm Password input-->
                                        <div class="relative mb-4" data-te-input-wrapper-init>
                                            <input
                                                    name="password2"
                                                    type="password"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="password2"
                                                    placeholder="Password" required />
                                            <label
                                                    for="password2"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                            >Confirmer le mot de passe
                                            </label>
                                        </div>

                                        <!--Submit button-->
                                        <div class="mb-12 pb-1 pt-1 text-center">
                                            <button
                                                    class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                                    type="submit"

                                                    name="saveUser"
                                                    style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">
                                                S'inscrire
                                            </button>


                                        </div>



                                    </form>
                                </div>
                            </div>

                            <!-- Right column container with background and description-->
                            <div
                                    class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
                                    style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)">
                                <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                                    <h4 class="mb-6 text-xl font-semibold">
                                        Des enseignants passionnés pour aider les enfants à progresser
                                    </h4>
                                    <p class="text-sm">
                                        Notre site de soutien scolaire propose diverses ressources pédagogiques pour aider les élèves à réussir à l'école. Nous mettons à disposition des contenus dans différentes matières, tels que les mathématiques, le français, l'anglais, la physique, la chimie, etc. Nos contenus sont élaborés par des enseignants qualifiés et expérimentés, qui ont à cœur de transmettre leur savoir et leur passion pour l'apprentissage. Nous proposons également des exercices pratiques, des quiz et des tests pour permettre aux élèves de s'entraîner et de mesurer leurs progrès. Notre site de soutien scolaire est accessible en tout temps, ce qui permet aux élèves de travailler à leur rythme et de progresser à leur propre niveau. Nous sommes convaincus que notre site de soutien scolaire peut aider les élèves à améliorer leurs résultats scolaires et à prendre confiance en eux.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

require('footer.html');

?>