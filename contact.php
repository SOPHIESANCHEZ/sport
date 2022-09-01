<?php require_once "./elements/header.php" ?>
      <!-- une section en row qui va contenir les coordonées en col ainsi que le formulaire qui sera lui aussi en col pour plus de facilité -->
        <section class="row contact w-80 m-auto mt-4 mb-4">
            <div class="col-md-4 coordonées">
                <h3 class="coor">NOS COORDONNEES</h3>
                    <ul class="list-unstyled">
                        <li class="font-weight-bold">Studio Sport & Coaching</li>
                        <li>01 Allée Marie Politzer</li>
                        <li>64200 Biarritz</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="font-weight-bold">Téléphone</li>
                        <li><a href="tel:0559478418">05 59 47 84 18</a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="font-weight-bold">Horaires</li>
                        <li>Du lundi au vendredi</li>
                        <li>de 8h à 14h? de 16h à 21h</li>
                        <li>Le samedi</li>
                        <li>de 10h à 13h</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="font-weight-bold">Email</li>
                        <li>contact (at)<a href="mailto:email@example.com">studiobiarritz.com</a></li>
                        <li>ou via ce formulaire</li>
                    </ul>
            </div>
            <div class="col-md-8">
                <h3 class="coor">FORMULAIRE DE CONTACT</h3>
                <form method="POST" action="verif_contact.php" id="myForm">
               <?php  if (isset($_GET['add']) && $_GET['add'] == 1) : ?>  
                    <div class= "alert alert-success">MESSAGE ENVOYE</div>
                    <?php header("refresh:2; url=index.php")?>   
                <?php  elseif (isset($_GET['add']) && $_GET['add'] == 0) : ?>  
                    <div class= "alert alert-danger">MESSAGE NON ENVOYE</div>
                    <?php header("refresh:2; url=index.php")?>   
                <?php endif; ?>
                    <div class="row mb-1">
                        <div class="col-md-7">
                            <div class="form-outline">
                                <input type="text" name="nom" id="nom" class="form-control bg-light" placeholder="VOTRE NOM"/>
                                <span id="errorName"></span>
                                <label class="form-label" id="nom"></label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-outline">
                                <input type="text" name="prenom" id="prenom" class="form-control bg-light " placeholder="VOTRE PRENOM"/>
                                <span id="errorFirstName"></span>
                                <label class="form-label" id="prenom"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-5">
                            <div class="form-outline mb-2">
                                <input type="email"  name="email" id="email" class="form-control bg-light" placeholder="VOTRE EMAIL"/>
                                <span id="errorEmail"></span> 
                                <label class="form-label" id="email"></label>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-outline mb-2">
                                <input type="number"  name="tel" id="number" class="form-control bg-light" placeholder="VOTRE TELEPHONE"/>
                                <span id="errorTel"></span>
                                <label class="form-label" id="number"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-1">
                        <input type="text"  name="objet" id="sujet" class="form-control bg-light" placeholder="SUJET"/>
                        <span id="errorSujet"></span>
                        <label class="form-label" id="sujet"></label>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea class="form-control bg-light"  name="message" id="message" rows="4" placeholder="MESSAGE"></textarea>
                        <span id="errorMessage"></span>
                        <label class="form-label" id="form6Example7"></label>
                    </div>
                    <input type="submit" value=" Envoyer" class="col-md-3 btn btn-dark btn-block mb-4"/>
                </form>
            </div>
        </section>
    <?php require_once "./elements/footer.php" ?> 