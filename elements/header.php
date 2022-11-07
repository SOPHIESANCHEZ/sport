

<?php $name_url = explode("/", $_SERVER["SCRIPT_NAME"]) ?>
<?php require_once "fonction2.php" ?>  
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>
     <?= isset($title) ? $title : "Salle de sport" ?>
    </title>
</head>
<body>
    <?php if ($name_url[2] == "presentation.php") : ?>
        <header class="header-presentation">
            <?php elseif ($name_url[2] == "contact.php") : ?>
                <header class="header-contact">
                    <?php else : ?>
                        <header class="">
                            <?php endif ?>
        <!-- début de la navbar avec plusieurs div pemettant de faire des widht différentes -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top w-100 m-auto d-flex justify-content-between align-items-center nav-fixed">
            <a class="navbar-brand logo-navbar ml-5" href="./index.php"><img class="logo" src="./images/logo_2.png" alt="#"></a>
                <div class="menu d-flex justify-content-around align-items-center w-100">
                <ul class="navbar-nav menu m-auto pr-3">
                   
                <?php 
                 echo add_menu("nav-item text-white","nav-link", "./error_404.html", "L'EQUIPE");
                 echo add_menu("nav-item text-white","nav-link", "./presentation.php", "LES ACTIVITES");
                 echo add_menu("nav-item text-white","nav-link", "./error_404.html", "NOS OFFRES");
                 echo add_menu("nav-item text-white","nav-link", "./error_404.html", "PLANNING");
                 echo add_menu("nav-item text-white","nav-link", "./error_404.html", "LE BLOG");
                 echo add_menu("nav-item text-white","nav-link", "./contact.php", "CONTACT");

                ?>


                <!--
                echo add_menus(["nav-item"],["nav-link"], ["./error_404.html"], ["L'EQUIPE"]); 
                echo add_menus(["nav-item"],["nav-link"], ["./presentation.php"], ["LES ACTIVITES"]); 
                echo add_menus(["nav-item"],["nav-link"], ["./error_404.html"], ["NOS OFFRES"]); 
                echo add_menus(["nav-item"],["nav-link"], ["./error_404.html"], ["PLANNING"]); 
                echo add_menus(["nav-item"],["nav-link"], ["./error_404.html"], ["LE BLOG"]); 
                echo add_menus(["nav-item"],["nav-link"], ["./contact.php"], ["CONTACT"]); 
                ?>-->


                 <!--   <li class="nav-item active">
                        <a class="nav-link text-white" href="./error_404.html">L'EQUIPE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./presentation.php">LES ACTIVITES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./error_404.html">NOS OFFRES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./error_404.html">PLANNING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./error_404.html">LE BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./contact.php">CONTACT</a>
                    </li>
                </ul>        -->
                    <div class="tel nav-item w-7 m-auto pr-5 pl-4">
                        <a class="nav-link  text-white" href="./error_404.html">
                        <i class="iconify" data-icon="clarity:mobile-solid"></i> 05 59 47 84 18</a>
                    </div>
                <ul class="reseaux list-unstyled mb-0 mt-1 pr-5"> 
                    <?php 
                    echo add_reseau("d-inline-block nav-item","https://www.facebook.com/", "iconify", "ant-design:facebook-filled");
                    echo add_reseau("d-inline-block nav-item","https://www.instagram.com/?hl=fr&__coig_restricted=1", "iconify", "ant-design:instagram-outlined");
                    echo add_reseau("d-inline-block nav-item","https://www.tripadvisor.fr/", "iconify", "la:tripadvisor");
                    ?>
                    <!--
                    <li class="d-inline-block nav-item"><a href="https://www.facebook.com/"><i class="iconify"
                        data-icon="ant-design:facebook-filled"></i></a></li>
                    <li class="d-inline-block nav-item pl-3"><a href="https://www.instagram.com/?hl=fr&__coig_restricted=1"><i class="iconify"
                        data-icon="ant-design:instagram-outlined"></i></a></li>
                    <li class="d-inline-block nav-item pl-3"><a href="https://www.tripadvisor.fr/"><i class="iconify"
                        data-icon="la:tripadvisor"></i></a></li>
                    -->
                </ul>
            </div>
            <!-- button burger pour le média querie -->
                <button class="burger"><span class="bar"></span></button>
        </nav>
        </div>
        <?php if ($name_url[2] == "index.php") :?>
        <!-- carousel bootstrap -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active rond-slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rond-slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rond-slide"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/slider/slide_1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-slide text-center mb-5">2 INSCRIPTIONS SIMULTANEES = UN 3EME ABONNEMENT DE 6 MOIS OFFERT</h4>
                        <button class="p-2 bg-transparent border-white rounded text-white mb-5 mt-5">Plus d'infos</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/slider/slide_2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/slider/slide_3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
        </div>
        <?php endif ?>
        </header>
  