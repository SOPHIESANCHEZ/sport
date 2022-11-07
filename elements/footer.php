<?php if ($name_url[2] == "contact.php") : ?>           
            <div class="map mt-5 bg-dark">
                    <iframe
                        src="https://maps.google.com/maps?q=avenue&amp;frederic&amp;mistral&amp;berre&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" height="560"  style="border:0" 
                        id="gmap_canvas" class="w-100 h-400 plan rounded-3">
                    </iframe>
                </div>
            <?php endif ?>
 <?php if ($name_url[2] == "index.php") : ?>                   
     <div class="footer bg-dark mt-7">
        <!-- ici section footer pour tout comprendre -->
        <section class="container-studio mt-7">
            <h3 class="text-center text-white mt-7 mb-5">STUDIO SPORT & COACHING, NOS PARTENAIRES</h3>
            <p class="row d-flex justify-content-center align-items-center text-white w-90 m-auto mt-5 mb-5">En tant que
                membre du Studio Sport & Coaching, vous bénéfiierez dans ces établissement d'avantages exclusifs. <a
                    class="cliquez-ici p-1" href="./error_404.html"> Cliquez-ici </a> pour en savoir plus.</p>
            <div class="partenaires text-center w-90 m-auto mt-5 mb-5">
                <img class="mini mt-5 mb-5" src="./images/partenaires/mini.png" alt="#">
                <img class="massage mt-5 mb-5" src="./images/partenaires/massage.png" alt="#">
                <img class="xt mt-5 mb-5" src="./images/partenaires/tellechea.png" alt="#">
                <img class="ocean mt-5 mb-5" src="./images/partenaires/ocean.png" alt="#">
                <img class="decat mt-5 mb-5" src="./images/partenaires/decathlon.png" alt="#">
            </div><div class="footer bg-dark">
            <?php endif ?>
            <?php if ($name_url[2] == "presentation.php") : ?>                     
            <div class="activite  mt-4 mb-5">
            <h3 class="text-center  mt-5 mb-5">LES ACTIVITES PROPOSES AU STUDIO SPORT BIARRITZ</h3>
        </div>
        <?php endif ?>
        
<footer class="container-fluid p-0">
<div class="footer bg-dark mt-7">
                <div class="row photos justify-content-center align-items-center w-100 m-auto mt-5 mb-5 no-gutters">
                    <div class="col-2 p-0"><img class="img-fluid" src="./images/coach/coach_1.jpg" alt="photos"></div>
                    <div class="col-2 p-0"><img class="img-fluid" src="./images/coach/coach_2.jpg" alt="photos"></div>
                    <div class="col-2 p-0"><img class="img-fluid" src="./images/coach/coach_3.jpg" alt="photos"></div>
                    <div class="col-2 p-0"><img class="img-fluid" src="./images/coach/coach_4.jpg" alt="photos"></div>
                    <div class="col-2 p-0"><img class="img-fluid" src="./images/coach/coach_5.jpg" alt="photos"></div>
                    <div class="col-2 p-0"><img class="img-fluid" src="./images/coach/coach_6.jpg" alt="photos"></div>
                </div>
                <div class="row justify-content-between align-items-center w-90 m-auto text-white mt-5 mb-5">
                    <div class="col-md-4 a-propos mt-5 mb-5">
                        <h5><img class="logo" src="./images/logo_footer.png" alt="#"> A PROPOS</h5>
                        <P><strong>2018 © Studio Sport Biarritz</strong>Salle de sport, de fitness et de Crossfit à
                            Biarritz Pays Basque,</P>
                        <p>RCS : 000 000 000</p>
                        <a href="#" class="text-white">Mentions légales</a>
                    </div>
                    <div class="col-md-4 corporate p-0 mt-5 mb-5">
                        <h5 class="text-white">STUDIO SPORT CORPORATE</h5>
                        <ul class="liste list-unstyled">
                            <?php
                 echo add_list("text-white", "./error_404.html", "-Studio Center : crééz votre studio");
                 echo add_list("text-white", "./error_404.html", "-Offres Spéciales C.E");
                 echo add_list("text-white", "./error_404.html", "-Devenir partenaire");
                        ?>
                            <!--
                            <li><a class="text-white" href="./error_404.html">-Studio Center : crééz votre studio</a></li>
                            <li><a class="text-white" href="./error_404.html">-Offres Spéciales C.E</a></li>
                            <li><a class="text-white" href="./error_404.html">-Devenir partenaire</a></li>
                            -->

                        </ul>
                    </div>
                    <div class="col-md-4 coach p-0 mt-5 mb-5">
                        <h5 class="text-white">FITNESS, CROSSFIT ET TRAINING AU PAYS BASQUE</h5>
                        <ul class="coach perso text-white list-unstyled">
                            <li>Coach personnel se sport à Biarritz,Coach personnel de sport à Los Angeles,</li>
                            <li>Salle de sport BAB,Fitness à Biarritz,,Session de fitness à Anglet</li>
                            <li>,Session de fitness sur le BAB</li>
                            <li>Autre mot clé + ville, Autre mot clé + ville, Autre mot clé + ville,</li>
                        </ul>
                    </div>
                </div>
                <div class="background">
                    <div class="box w-25 justify-content-center align-items-center m-auto mt-5">
                        <div class="One">
                            <h5 class="text-white text-center">Un site créé par<br>L'AGENCE 364 COM'</h5>
                        </div>
                        <div class="Two"><img src="./images/364.png" alt=""></div>
                    </div>
                </div>
            </div>
            </footer>
            <!-- fin du sous footer -->
        </section>
        <!-- fin 1 footer qui englobe les deux -->
    
        </div></div>
    <!-- fin du bg footer -->
     <!-- bg footer en div car en erreur au W3C si section -->
    
            <!-- un sous footer pour pouvoir le dupliquer sur les autres pages -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/jquery.js"></script>
    <!-- <script src="./js/_old.js"></script>   -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>
</html>