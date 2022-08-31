<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness-Area</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400&amp;display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="./images/fav_icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="./Style.css">
</head>

<body>

    <div id="barre" style="width: 984.211px;"></div>

    <header class="nav_header">
        <?php
        include("./common/menu.php");
        ?>

    </header>


    <main>


        <div id="main_tarif">
            <img src="./images/Banniere_tarif.png" alt="" id="banniere_tarifs">

            <div class="intro_tarif">
                <h1>TROUVE RAPIDEMENT<br>L’ABONNEMENT QUI TE CORRESPOND.</h1>
                <p>Transpire l’effort et atteints tes objectifs avec Fitness-Area. Une salle repensée pour les sportifs débutant, occasionel ou <br> même expérimenté. Nos coach sont à ta disposition en cas de doute ou de besoin particulier.<br>
                    Aucune excuse pour ne pas y’aller ! </p>
            </div>
            <h2 id="NosForfaits">Nos forfaits</h2>

            <div class="AllForfait">

                <article class="ClassicForfait">
                    <h2>Forfait Classic</h2>
                    <div class="price">19.99 / mois <br><span>Pendant un an</span> </div>
                    <div class="option">
                        <div class="yes">
                            <p>Accès illimité à la salle</p>
                            <img src="./images/check.png" alt="">
                        </div>
                        <div class="yes">
                            <p>Accès aux cours collectifs virtuel GXR</p>
                            <img src="./images/check.png">
                        </div>
                        <div class="no">
                            <p>Partage de la carte</p>
                            <img src="./images/Croix.png">
                        </div>
                        <div class="no">
                            <p>Possibilité d'invité quelqu'un</p>
                            <img src="./images/Croix.png">
                        </div>
                        <div class="prix">
                            <p>Frais d'inscription</p>
                            <p id="figure">19.99 euros</p>
                        </div>
                    </div>
                    <div class="btn_orange">Selectionner</div>


                </article>

                <article class="PremiumForfait">
                    <h2>Forfait Premium</h2>
                    <div class="price2">29.99 / mois<br><span>Pendant un an</span></div>
                    <div class="option">
                        <div class="yes">
                            <p>Accès illimité à la salle</p>
                            <img src="./images/check.png" alt="">
                        </div>
                        <div class="yes">
                            <p>Accès aux cours collectifs virtuel GXR</p>
                            <img src="./images/check.png">
                        </div>
                        <div class="no">
                            <p>Partage de la carte</p>
                            <img src="./images/check.png">
                        </div>
                        <div class="no">
                            <p>Possibilité d'invité quelqu'un</p>
                            <img src="./images/check.png">
                        </div>

                        <div class="no">
                            <p>Coaching digital inclus
                            </p>
                            <img src="./images/check.png">
                        </div>

                        <div class="no">
                            <p>Bilan sportif par nos coachs
                            </p>
                            <img src="./images/check.png">
                        </div>


                        <div class="prix">
                            <p>Frais d'inscription</p>
                            <p id="figure">Gratuit</p>
                        </div>
                    </div>
                    <div class="btn_red">Selectionner</div>


                </article>
            </div>

            <div class="Allpresta">
                <div class="bloc_presta">
                    <img src="./images/muscle-presta.jpg" alt="">
                    <p>Au soulevé de terre, il est nécessaire que la barre suive le prolongement de vos tibias puis de vos cuisses et vous devez être bien stable sur les talons...
                    </p>
                    <div class="btn_plus">Voir +</div>
                </div>

                <div class="bloc_presta">
                    <img src="./images/presta-women.jpg" alt="">
                    <p>Pour maximiser à la fois la force et l'hypertrophie de l'épaule, le stress mécanique (charge) doit être maximisé. Aucun autre ... </p>
                    <div class="btn_plus">Voir +</div>
                </div>

                <div class="bloc_presta">
                    <img src="./images/presta_men.png" alt="">
                    <p>Conseils pour les flexions de poignets avec haltère
                        Vous devez vous asseoir en arrière pour que vos bras soient droits...
                    </p>
                    <div class="btn_plus">Voir +</div>
                </div>
            </div>



        </div>
        <div class="fond_tarif">
        </div>
        <img src="./images/Pub_tarifs.png" alt="homme qui court" id="homme_qui_court">

    </main>

    <?php
    include('./common/footer.php')
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="./index.js"></script>

</body>

</html>