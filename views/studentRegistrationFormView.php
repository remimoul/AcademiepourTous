<?php

require('header.php');
?>


<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl mx-[5%] px-4 py-4 ">Formulaire d'inscription en ligne</h2>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">

                    <form method="post" action="" class="lg:col-auto">
                        <div class="grid gap-4 gap-y-2 text-sm">
                            <div class="">
                                <label for="annéescolaire">Année Scolaire</label>
                                <input type="text" name="annéescolaire" id="annéescolaire" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                            </div>

                            <div class="">
                                <label for="niveau">Niveau</label>
                                <input type="text" name="niveau" id="niveau" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="6ème" />
                            </div>

                            <div class="">
                                <label for="etablissement">Etablissement Fréquenté</label>
                                <input type="text" name="etablissement" id="etablissement" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                            </div>

                            <div class="">
                                <label for="classe">Classe</label>
                                <input type="text" name="classe" id="classe" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                            </div>

                            <h3 class="text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl mx-[5%] px-4 py-4 ">Eleves</h3>


                            <div class="">
                                <label for="nomeleve">Nom</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="nomeleve" id="nomeleve" placeholder="Nom" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />

                                </div>
                            </div>

                            <div class="">
                                <label for="prenomeleve">Prénoms</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="prenomeleve" id="prenomeleve" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>



                            <div class="">
                                <div class="">

                                    <label for="sexe" class="ml-2">Sexe : </label> <label for="male">M :</label>
                                    <input type="checkbox" name="male" id="male" class="form-checkbox" value="male" /> <label for="female">F :</label>
                                    <input type="checkbox" name="female" id="female" class="form-checkbox" value="female" />
                                </div>
                            </div>

                            <div class="">
                                <label for="nationality">Nationalité</label>
                                <input type="text" name="nationality" id="nationality" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" value="" />
                            </div>

                            <div class="">
                                <label for="placeofbirth">Lieu de naissance (commune et département)</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="placeofbirth" id="placeofbirth" placeholder="" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>

                            <div class="">
                                <label for="adresse1">Adresse</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="adresse1" id="adresse1" placeholder="Adresse" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>

                            <div class="">
                                <label for="postal">Code Postal</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="postal" id="postal" placeholder="Postal" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                                <label for="commune">Commune</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="commune" id="commune" placeholder="Commune" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>

                            <h3 class="text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl mx-[5%] px-4 py-4 ">Responsables Légaux</h3>


                            <div class="">
                                <label for="responsablenom">Nom</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="responsablenom" id="responsablenom" placeholder="Nom" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />

                                </div>
                            </div>

                            <div class="">
                                <label for="responsableprenom">Prénoms</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="responsableprenom" id="responsableprenom" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>



                            <div class="">


                                    <label class="ml-2">Résponsable légal : </label>
                                <input type="checkbox" name="pere" id="pere" class="form-checkbox" />
                                <label for="pere">Pere</label>
                                    <input type="checkbox" name="mere" id="mere" class="form-checkbox" /> <label for="mere">Mere</label>
                                    <input type="checkbox" name="tuteur" id="tuteur" class="form-checkbox" /><label for="tuteur"> Tuteur</label>
                                    <input type="checkbox" name="autre" id="autre" class="form-checkbox" /><label for="autre">Autre</label>
                                <input type="text" name="autre" id="autre" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" value="" />

                            </div>

                            <div class="">
                                <div class="flex items-center"
                                <label for="responsablepro">Profession</label>
                                <input type="text" name="responsalblepro" id="responsablepro" class="transition-all flex items-center mx-1 h-10 border mt-1 rounded px-4 w-3/6 bg-gray-50" value="" />



                                <label for="situationfamille">Situation familiale</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1 w-3/6">
                                    <input name="situationfamille" id="situationfamille" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div></div>

                            <div class="">
                                <label for="adresse2">Adresse</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="adresse2" id="adresse2" placeholder="adresse" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>
                            </div>

                            <div class="">
                                <label for="postal2">Code Postal</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="" name="postal2" id="postal2" placeholder="Code Postal" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="responsablecommune">Commune</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="responsablecommune" id="responsablecommune" type="text" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>
                            <div>
                                <label for="phonefix">Téléphone fixe</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="tel" name="phonefix" id="phonefix" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="portable">Téléphone portable</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="tel" name="portable" id="portable" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="telephonepro">Téléphone professionnel</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="tel" name="telephonepro" id="telephonepro" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="email">Courriel</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="email" name="email" id="email" placeholder="Votre email" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>

                            <div>
                                <label for="urgence">A appeler en cas d'urgence (indiquer nom,prenom,numéro de téléphone si différente du responsable légal et si cette personne est autorisée a recuperer l'enfant)</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="urgence" id="urgence" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                </div>

                            </div>










                            <div class=" text-right">
                                <div class="inline-flex items-end">
                                    <button name="sendStudent" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
                                </div>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
