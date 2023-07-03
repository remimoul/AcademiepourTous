<?php

require('header.php');
?>


<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl mx-[5%] px-4 py-4 ">Formulaire d'inscription en ligne</h2>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">

                    <form class="lg:col-auto">
                        <div class="grid gap-4 gap-y-2 text-sm">
                            <div class="">
                                <label for="full_name">Année Scolaire</label>
                                <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                            </div>

                            <div class="">
                                <label for="email">Niveau</label>
                                <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="6ème" />
                            </div>

                            <div class="">
                                <label for="address">Etablissement Fréquenté</label>
                                <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                            </div>

                            <div class="">
                                <label for="city">Classe</label>
                                <input type="text" name="city" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                            </div>

                            <h3 class="text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl mx-[5%] px-4 py-4 ">Eleves</h3>


                            <div class="">
                                <label for="country">Nom</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="country" id="country" placeholder="Nom" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />

                                </div>
                            </div>

                            <div class="">
                                <label for="state">Prénoms</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>



                            <div class="">
                                <div class="">

                                    <label for="billing_same" class="ml-2">Sexe : </label> <label>M :</label>
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox" /> <label>F :</label>
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox" />
                                </div>
                            </div>

                            <div class="">
                                <label for="zipcode">Nationalité</label>
                                <input type="text" name="zipcode" id="zipcode" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" value="" />
                            </div>

                            <div class="">
                                <label for="state">Lieu de naissance (commune et département)</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>

                            <div class="">
                                <label for="state">Adresse</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>

                            <div class="">
                                <label for="state">Code Postal</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                                <label for="state">Commune</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>

                            <h3 class="text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl mx-[5%] px-4 py-4 ">Responsables Légaux</h3>


                            <div class="">
                                <label for="country">Nom</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="country" id="country" placeholder="Nom" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />

                                </div>
                            </div>

                            <div class="">
                                <label for="state">Prénoms</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>



                            <div class="">


                                    <label for="billing_same" class="ml-2">Résponsable légal : </label>
                                <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox" />
                                <label>Pere</label>
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox" /> <label>Mere</label>
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox" /><label> Tuteur</label>
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox" /><label>Autre</label>
                                <input type="text" name="zipcode" id="zipcode" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" value="" />

                            </div>

                            <div class="">
                                <div class="flex items-center"
                                <label>Profession</label>
                                <input type="text" name="" id="" class="transition-all flex items-center mx-1 h-10 border mt-1 rounded px-4 w-3/6 bg-gray-50" value="" />



                                <label for="state">Situation familiale</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1 w-3/6">
                                    <input name="state" id="state" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div></div>

                            <div class="">
                                <label for="state">Adresse</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>

                            <div class="">
                                <label for="state">Code Postal</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="state">Commune</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>
                            <div>
                                <label for="state">Téléphone fixe</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="state">Téléphone portable</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="state">Téléphone professionnel</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="state">Courriel</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="state">A appeler en cas d'urgence (indiquer nom,prenom,numéro de téléphone si différente du responsable légal et si cette personne est autorisée a recuperer l'enfant)</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>










                            <div class=" text-right">
                                <div class="inline-flex items-end">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                </div>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
