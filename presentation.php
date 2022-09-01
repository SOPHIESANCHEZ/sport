<?php $title = "presentation" ?>
<?php require_once "./elements/header.php" ?>


            <h3 class="text-center mt-2 mb-5">LE TRAINING FONCTIONNEL</h3>
            <!-- une div en row qui va comprendre deux col principale, texte avec bouton et petit slider -->
            <div class="row contact w-80 m-auto mt-4 mb-4">
                <div class="col-md-5 mb-4">
                    <p class="lorem1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa illo excepturi eaque laudantium incidunt consectetur delectus distinctio optio exercitationem asperiores.
                    Lorem ipsum,Lorem ipsum, dolor sit amet consectetur adipisicing elit. . 
                    </p>
                    <p class="lorem1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa illo excepturi Lorem ipsum, dolor sit amet consectetur adipisicing elit.eaque laudantium incidunt consectetur delectus distinctio optio exercitationem asperiores.
                  
                    </p>
                    <p class="lorem1">Lorem ipsum, dolor sit amet consectetur Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.adipisicing elit. Ipsa illo excepturi eaque laudantium incidunt consectetur delectus distinctio optio exercitationem asperiores.
                    Lorem ipsum
                    </p>
                    <!-- une row dans la première col pour les deux btn -->
                    <div class="row-mb-5 text-center d-flex justify-content-around">
                        <a href="./error_404.html" class="btn text-white mr-4">VOIR NOS OFFRES ET FORMULES</a>
                        <a href="./contact.php" class="btn text-white">CONTACT ET RÉSERVATION</a>
                    </div>
                </div>
                <div class="col-md-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active rond-slide"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rond-slide"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rond-slide"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./images/slider/crossfit.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./images/slider/cycling.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./images/slider/personal-training.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    </a>
                </div>
                </div>
            </div>
            <!-- une section pour réunir toutes les cartes, le strong a été untilisé ici car il était ciblé seulement sur mot à chaque carte -->
        <section class="atelier w-80 m-auto">
            <h3 class="text-center  mt-5 mb-5">LES ATELIERS PRESENT DANS LE TRAINING FONCTIONNEL</h3>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="./images/visuel/images.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">TRX CORE</h5>
                            <p class="card-text">Ce cours a pour but d'améliorer votre force fonctionnelle ainsi que votre mobilité à l'aide de sangles en suspension.<br>L'accent est mis sur le CORE ( centre du corps ) afin d'obtenir un gainage, une sangle abdominale résistante à toute épreuve et un renforcement musculaire.<br>En complément, des automassages et des exercices de mobilités et d'étirements sont également présents dans ce cours</p>
                            <p class="card-text"><small class="text"><strong>Durée :</strong> 45 minutes</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="./images/visuel/images.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">BOXE</h5>
                            <p class="card-text">Ici un seul mot d'ordre : se défouler ! Mélange de karaté, de boxe, de kick boxing et de MMA, le cours se déroule face à un sac de frappe, gants aux poings et accompagné de petits matériels : corde à sauter, slam ball ...L'objectif ici est d'améliorer vos qualités de resistance à l'effort, de vitesse, de coodination et d'agilité.</p>
                            <p class="card-text"><small class="text"><strong>Durée :</strong> 30 minutes</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="./images/visuel/images.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">HIT</h5>
                            <p class="card-text">Le HIIT est l'acronyme de high intensity Interval training en anglais. Cet entrainement à haute haute intensité realisé avec le poids du corps, alterne périodes d'efforts, courts et intenses et période de récupération active, dans le but de brûler un maximum de calories<br></p>
                            <p class="card-text"><small class="text"><strong>Durée :</strong> 30 minutes</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="./images/visuel/images.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">TRX FUSION</h5>
                            <p class="card-text">Un excellent programme pour travailler l'ensemble du corps et transiper à grosses gouttes. Grâce à des exercices d'une intensité allant de modérée à forte, votre, vous allez sculpter et tonifier votre corps tout en perdant du poids. Un bon compromis entre renforcement musculaire et cardio. Dans cet atelier, vous utilisez des sangles de TRX et des accessoires comme le Kettlebell, le Slamball ou le VIPR. Votre mental et votre système cardi-vasculaire seront mis à rudes épreuves !
                            </p>
                            <p class="card-text"><small class="text"><strong>Durée :</strong> 30 minutes</small></p>
                        </div>
                    </div>
                </div>
                <!-- le seul hr autorisé -->
                <hr class="ligne-grise solid 1px secondary">
        </section>
<?php require_once "./elements/footer.php" ?> 