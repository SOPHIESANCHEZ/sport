<?php $title = "Page d'acceuil de votre site" ?>
<?php require_once "./elements/header.php"; ?>


<section>
    <?php session_start(); ?>
    <?php if (isset($_SESSION["email"])) : ?>
        <h1 style="color: black;">Bienvenue à vous <?php echo $_SESSION["email"] ?></h1>
        <a href="logout.php">Deconnexion</a>
    <?php else : ?>
        <a href="login.php">Connexion ou inscription</a>
    <?php endif; ?>


</section>





<?php require "elements/footer.php"; ?>