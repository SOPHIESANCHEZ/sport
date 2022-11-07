<?php $title = "Se connecter" ;?>
<?php require_once "elements/function.php"; ?>
<?php require_once "elements/function_call.php"; ?>


<?php

//allons créer une page de connexion où l’utilisateur peut entrer son nom d’utilisateur et son mot de passe. 
//Lorsque l’utilisateur soumettra le formulaire, ces entrées seront vérifiées par rapport aux informations d’identification stockées 
//dans la base de données. Si le nom d’utilisateur et le mot de passe correspondent, l’utilisateur est autorisé et se voit accorder 
//l’accès au site, sinon la tentative de connexion sera rejetée.
?>

<div class="form">

    <ul class="tab-group">
        <li class="tab"><a href="sign_up.php">S'enregistrer</a></li>
        <li class="tab active"><a href="login.php">Se connecter</a></li>
    </ul>

    <div class="tab-content">
        <div id="login">
            <h1>Se connecter</h1>
            <?php if (isset($query)) : ?>
                <?php echo isUserCo($query) ?>
                <?php echo isEmptyUser($query) ?>
            <?php endif; ?>

            <form action="elements/login_verif.php" method="post">
                <div class="field-wrap">
                    <label>
                        Adresse Mail<span class="req">*</span>
                    </label>
                    <input type="email" name="email" />
                </div>

                <div class="field-wrap">
                    <label>
                        Mot de passe<span class="req">*</span>
                    </label>
                    <input type="password" name="password" />
                </div>
                <input type="hidden" name="crf_token" value="<?= $_SESSION["crf_token"] ;?>"/>
                <button type="submit" class="button button-block" />S'inscrire</button>

            </form>

        </div>



    </div><!-- tab-content -->

</div>
<!-- /form -->