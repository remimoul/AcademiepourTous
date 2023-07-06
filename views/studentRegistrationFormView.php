<?php

require('header.php');
?>


<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl mx-[5%] px-4 py-4 ">Formulaire d'inscription en ligne</h2>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">

                    <form method="post" action="studentRegistrationFormController/addOneStudent" class="lg:col-auto">

                        <div class="grid gap-4 gap-y-2 text-sm">
                            <div class="">
                                <label for="annee_scolaire">Année Scolaire</label>
                                <input type="text" name="annee_scolaire" id="anneescolaire" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required>
                            </div>

                            <div class="">
                                <label for="niveau">Niveau</label>
                                <input type="text" name="niveau" id="niveau" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="6ème" required/>
                            </div>

                            <div class="">
                                <label for="etablissement">Etablissement Fréquenté</label>
                                <input type="text" name="etablissement" id="etablissement" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                            </div>

                            <div class="">
                                <label for="classe">Classe</label>
                                <input type="text" name="classe" id="classe" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" required />
                            </div>

                            <h3 class="text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl mx-[5%] px-4 py-4 ">Eleves</h3>


                            <div class="">
                                <label for="name_student">Nom</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="name_student" id="nomeleve" placeholder="Nom" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" required />

                                </div>
                            </div>

                            <div class="">
                                <label for="prenomeleve">Prénoms</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="lastname_student" id="prenomeleve" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" required />
                                </div>
                            </div>



                            <div class="">
                                <div class="">

                                    <label for="sexe" class="ml-2" >Sexe : </label> <label for="male">M :</label>
                                    <input type="checkbox" name="sexe" id="male" class="form-checkbox" value="male" /> <label for="female">F :</label>
                                    <input type="checkbox" name="sexe" id="female" class="form-checkbox" value="female" />
                                </div>
                            </div>

                            <div class="">
                                <label for="nationality">Nationalité</label>
                                <input type="text" name="nationalite" id="nationality" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" required />
                            </div>

                            <div class="">
                                <label for="placeofbirth">Lieu de naissance (commune et département)</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="lieu" id="placeofbirth" placeholder="" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" required />
                                </div>
                            </div>

                            <div class="">
                                <label for="adresse1">Adresse</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="adresse_student" id="adresse1" placeholder="Adresse" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" required />
                                </div>
                            </div>

                            <div class="">
                                <label for="postal">Code Postal</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="postal_student" id="postal" placeholder="Postal" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" required />
                                </div>
                                <label for="commune">Commune</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="commune_student" id="commune" placeholder="Commune" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" required />
                                </div>
                            </div>

                            <h3 class="text-left my-12 mx-12 text-4xl mx-10 font-bold navbar text-white shadow-xl mx-[5%] px-4 py-4 ">Responsables Légaux</h3>


                            <div class="">
                                <label for="responsablenom">Nom</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="nom_resp" id="responsablenom" placeholder="Nom" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />

                                </div>
                            </div>

                            <div class="">
                                <label for="responsableprenom">Prénoms</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="prenom_resp" id="responsableprenom" placeholder="Prénoms" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />
                                </div>
                            </div>



                            <div class="">


                                    <label class="ml-2">Résponsable légal : </label>
                                <input type="checkbox" name="pere" id="pere" class="form-checkbox" value="pere"/>
                                <label for="pere">Pere</label>
                                    <input type="checkbox" name="mere" id="mere" class="form-checkbox" value="mere" /> <label for="mere">Mere</label>
                                    <input type="checkbox" name="tuteur" id="tuteur" class="form-checkbox" value="tuteur" /><label for="tuteur"> Tuteur</label>
                                    <input type="checkbox" name="autre" id="autre" class="form-checkbox" /><label for="autre">Autre</label>
                                <input type="text" name="autre" id="autre" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" />

                            </div>

                            <div class="">
                                <div class="flex items-center"
                                <label for="responsablepro">Profession</label>
                                <input type="text" name="profession" id="responsablepro" class="transition-all flex items-center mx-1 h-10 border mt-1 rounded px-4 w-3/6 bg-gray-50"  />



                                <label for="situationfamille">Situation familiale</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1 w-3/6">
                                    <input name="situation" id="situationfamille" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />
                                </div>
                            </div></div>

                            <div class="">
                                <label for="adresse_resp">Adresse</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="adresse_resp" id="adresse2" placeholder="adresse" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />
                                </div>
                            </div>

                            <div class="">
                                <label for="postal2">Code Postal</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="" name="postal_resp" id="postal2" placeholder="Code Postal" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />
                                </div>

                            </div>

                            <div>
                                <label for="responsablecommune">Commune</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="commune_resp" id="responsablecommune" type="text" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />
                                </div>

                            </div>
                            <div>
                                <label for="phonefix">Téléphone fixe</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="tel" name="phone" id="phonefix" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />
                                </div>

                            </div>

                            <div>
                                <label for="portable">Téléphone portable</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="tel" name="mobile" id="portable" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />
                                </div>

                            </div>

                            <div>
                                <label for="mobilepro">Téléphone professionnel</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="tel" name="mobilepro" id="telephonepro" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />
                                </div>

                            </div>

                            <div>
                                <label for="mail">Courriel</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input type="email" name="mail" id="email" placeholder="Votre email" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"  />
                                </div>

                            </div>

                            <div>
                                <label for="urgent">A appeler en cas d'urgence (indiquer nom,prenom,numéro de téléphone si différente du responsable légal et si cette personne est autorisée a recuperer l'enfant)</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="urgent" id="urgence" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
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


<?php
require('footer.html');