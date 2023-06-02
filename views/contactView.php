<?php
require ('header.html');
?>
<body>

<style>

    .testone{

        background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
    }
    
    @media (max-width: 964px) {
        .contact-container{
            margin: 0 auto;
            width: 90%;
        }
    }
    @media (max-width: 700px) {
        .contact-container{
            grid-template-columns: 1fr ;
            gap: 1rem;
        }
        .map iframe {
            height: 400px;
        }
    }

</style>

<section class="w-full h-full flex flex-col justify-center items-center my-12">
    <div class="contact-container max-w-full max-w-[960px] grid grid-cols-2 shadow-lg shadow-black rounded-lg navbar">

    <div class="form-container  w-full md:w-1/2 px-2 ">
<h3 class="mx-2 my-2 font-bold text-slate-50">VOTRE MESSAGE</h3>
<form action="" class="contact-form">

    <input type="text" placeholder="Votre Nom" required class="mx-auto my-2 rounded-sm">
<input type="email" name="" id="" placeholder="Entrez votre Email" required class="mx-auto rounded-sm">
<br>
    <textarea name="" id="" cols="30" rows="10" placeholder="Ecrivez votre message ! :)" required class="mx-auto my-2 rounded-sm"></textarea>

    <button type="submit" class="my-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Envoyer</button>

</form>



    </div>





<!--    MAP-->
<div class="map">
    <iframe class="w-full h-full rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d655.8881380786411!2d2.3894938941189996!3d48.88580585968074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dc873f68407%3A0xcce9d3298e63562a!2s18%20Rue%20Goubet%2C%2075019%20Paris!5e0!3m2!1sfr!2sfr!4v1685090611943!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    </div>
</section>


<?php
require ('footer.html');
?>