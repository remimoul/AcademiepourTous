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
                    <div class="">
                        <!-- column container-->
                        <div class="px-4 md:px-0 ">
                            <div class="md:mx-6 md:p-12" >
                                <!--Logo-->
                                <div class="text-center">
                                    <img
                                        class="mx-auto w-32"
                                        src="assets/image/Logo.png"
                                        alt="logo" />
                                    <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                        Connectez-vous à votre compte
                                    </h4>
                                </div>

                                <form action="loginController/connexion" method="post">
                                    <p class="mb-4">Veuillez vous connecter à votre compte</p>
                                    <!--Username input-->
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <input
                                                name="mail"
                                            type="text"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            id="mail"
                                            placeholder="Username" />
                                        <label
                                            for="mail"
                                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                        >Email
                                        </label>
                                    </div>

                                    <!--Password input-->
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <input
                                                name="password"
                                            type="password"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            id="password"
                                            placeholder="Password" />
                                        <label
                                            for="password"
                                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                        >Mot de passe
                                        </label>
                                    </div>

                                    <!--Submit button-->
                                    <div class="mb-12 pb-1 pt-1 text-center">
                                        <button
                                                name="connexion"
                                            class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                            type="submit"
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
                                        <a
                                                href="./views/signupView.php"
                                            type="button"
                                            class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                            data-te-ripple-init
                                            data-te-ripple-color="light">
                                            S'inscrire
                                        </a>
                                    </div>
                                </form>
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