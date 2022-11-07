
<?php $title = "S'enregistrer"; ?>
<?php require_once "elements/header.php"; ?>
<?php require_once "registration/function.php"; ?>
<?php require_once "registration/function_call.php"; ?>

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="sign_up.php">S'enregistrer</a></li>
        <li class="tab"><a href="login.php">Se connecter</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>S'inscrire</h1>
            <?php if (isset($query)) : ?>
                <?php echo verifAdd($query) ?>
                <?php echo isEmptyUser($query) ?>
            <?php endif; ?>

            <form action="elements/sign_up_verif.php" method="post">
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

                <button type="submit" class="button button-block" />S'inscrire</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div>
<!-- /form -->
<?php require "elements/footer.php" ?>