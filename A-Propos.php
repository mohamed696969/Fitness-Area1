<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness-Area</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="./images/fav_icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Style.css">
</head>
<div id="barre" style="width: 96.9574px;"></div>

<body>


    <header>

        <?php
        include("./common/menu.php");
        ?>
    </header>


    <main>
        <div class="A-prop-main">
            <img src="./images/Banniere_a-propos.png" alt="" id="A-propos-img">



            <div class="intro_A-propos">
                <h1>NOUS SOMME A VOTRE ECOUTE !</h1>
                <p>Transpire l’effort et atteints tes objectifs avec Fitness-Area. Une salle repensée pour les sportifs débutant, occasionel ou <br> même expérimenté. Nos coach sont à ta disposition en cas de doute ou de besoin particulier.<br>
                    Aucune excuse pour ne pas y’aller ! </p> <img src="./images/modele.png" alt="" class="modele reveal">
            </div>

            <div class="coach_profil">
                <div class="coach_nom">
                    <img src="./images/coach1.png" alt="">
                    <h1>Julia</h1>
                    <p>Coach sportif</p>
                </div>

                <div class="coach_nom">
                    <img src="./images/coach2.png" alt="">
                    <h1>Sebastien</h1>
                    <p>Coach sportif</p>
                </div>
                <div class="coach_nom">
                    <img src="./images/coach3.png" alt="">
                    <h1>Thomas</h1>
                    <p>Coach sportif</p>
                </div>
                <div class="coach_nom">
                    <img src="./images/coach4.png" alt="">
                    <h1>Célia</h1>
                    <p>Coach sportif</p>
                </div>
            </div>

            <!-- ----Carousel coach---- -->
            <section class="product">

                <h1 id="scrollez">Scrollez ! </h1>
                <div class="product-container">

                    <div class="coach_carousel1">

                        <div class="coach_profil1">
                            <img src="./images/coach1.png" alt="">
                            <div class="coach_nom-carousel">
                                <h1>Julia</h1>
                                <p>Coach sportif</p>
                            </div>
                        </div>
                    </div>


                    <div class="coach_carousel1">

                        <div class="coach_profil1">
                            <img src="./images/coach2.png" alt="">
                            <div class="coach_nom-carousel">
                                <h1>Sébastien</h1>
                                <p>Coach sportif</p>
                            </div>
                        </div>
                    </div>

                    <div class="coach_carousel1">
                        <div class="coach_profil1">
                            <img src="./images/coach3.png" alt="">
                            <div class="coach_nom-carousel">
                                <h1>Thomas</h1>
                                <p>Coach sportif</p>
                            </div>

                        </div>
                    </div>

                    <div class="coach_carousel1">

                        <div class="coach_profil1">
                            <img src="./images/coach4.png" alt="">
                            <div class="coach_nom-carousel">
                                <h1>Célia</h1>
                                <p>Coach sportif</p>
                            </div>

                        </div>
                    </div>




                </div>



            </section>

            <!-- --FAQ--- -->


            <!--Présentation salle-->
            <h2 id="Salle-titre">Votre salle de sport</h2>

            <div class="Article_salle">

                <img src="./images/Batiment-FA.png" alt="Salle de sport" id="Salle_de_sport">
                <div class="texteNbtn">
                    <p> Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor équipé de nombreux équipements Lorem ipsum dolor Lorem ipsum dolor Loror Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor psum . Comportant 2 forfaits ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor</p>
                    <a href="./sinscrire.php" id="inscrire1">S'inscrire</a>
                </div>
            </div>

            <!---->

            <!--Témoignages-->
            <span id="like">
                <h3>Ils sont satisfaits</h3>
            </span>

            <div class="avis">

                <div class="temoignage">

                    <img src="./images/pp-Celia.png" alt="" id="pp">
                    <hn id="nom">Célia</hn>
                    <p>"Une salle à la hauteur de mes attentes"</p>
                    <div class="star">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                    </div>
                </div>

                <div class="temoignage">

                    <div class="nom1">
                        <img src="./images/pp-maxime.png" alt="" id="pp">
                        <hn id="nom">Maxime</hn>
                    </div>
                    <p>"Je ne suis pas déçu par cette salle"</p>
                    <div class="star">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                    </div>
                </div>

                <div class="temoignage">

                    <div class="nom1">
                        <img src="./images/pp-Sebastien.png" alt="" id="pp">
                        <hn id="nom">Léon</hn>
                    </div>
                    <p>"Excellent rapport qualité / prix"</p>
                    <div class="star">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                    </div>
                </div>

                <div class="temoignage">
                    <img src="./images/pp-Sandra.png" alt="" id="pp">
                    <hn id="nom">Sandra</hn>
                    <p>"Salle très propre, tranquille."</p>
                    <div class="star">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                    </div>
                </div>

                <div class="temoignage">
                    <img src="./images/pp-mounir.png" alt="" id="pp">
                    <hn id="nom">Mounir</hn>
                    <p>"Super! Personnel acceuillant et disponible "</p>
                    <div class="star">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                    </div>
                </div>

                <div class="temoignage">
                    <div class="nom1">
                        <img src="./images/pp.png" alt="" id="pp">
                        <hn id="nom">Mohamed</hn>
                    </div>

                    <p>"Machines fonctionnelles et intuitives"</p>
                    <div class="star">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                        <img src="./images/etoile.png" alt="">
                    </div>
                </div>
            </div>

            <!-- Témoignage carousel pour smartphone -->
            <section class="product">

                <div class="product-container">

                    <div class="temoignage">

                        <img src="./images/pp-Celia.png" alt="" id="pp">
                        <hn id="nom">Célia</hn>
                        <p>"Une salle à la hauteur de mes attentes"</p>
                        <div class="star">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                        </div>
                    </div>


                    <div class="temoignage">

                        <img src="./images/pp-Celia.png" alt="" id="pp">
                        <hn id="nom">Célia</hn>
                        <p>"Une salle à la hauteur de mes attentes"</p>
                        <div class="star">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                        </div>
                    </div>

                    <div class="temoignage">

                        <div class="nom1">
                            <img src="./images/pp-maxime.png" alt="" id="pp">
                            <hn id="nom">Maxime</hn>
                        </div>
                        <p>"Je ne suis pas déçu par cette salle"</p>
                        <div class="star">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                        </div>
                    </div>

                    <div class="temoignage">

                        <div class="nom1">
                            <img src="./images/pp-Sebastien.png" alt="" id="pp">
                            <hn id="nom">Léon</hn>
                        </div>
                        <p>"Excellent rapport qualité / prix"</p>
                        <div class="star">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                        </div>
                    </div>

                    <div class="temoignage">
                        <img src="./images/pp-Sandra.png" alt="" id="pp">
                        <hn id="nom">Sandra</hn>
                        <p>"Salle très propre, tranquille."</p>
                        <div class="star">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                        </div>
                    </div>


                    <div class="temoignage">
                        <img src="./images/pp-mounir.png" alt="" id="pp">
                        <hn id="nom">Mounir</hn>
                        <p>"Super! Personnel acceuillant et disponible "</p>
                        <div class="star">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                        </div>
                    </div>

                    <div class="temoignage">
                        <div class="nom1">
                            <img src="./images/pp.png" alt="" id="pp">
                            <hn id="nom">Mohamed</hn>
                        </div>

                        <p>"Machines fonctionnelles et intuitives"</p>
                        <div class="star">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                            <img src="./images/etoile.png" alt="">
                        </div>
                    </div>
                </div>


            </section>
            <!---->


            <!--Qr-Code-->
            <div class="rectangle_rouge">
                <img src="./images/modele.png" alt="homme consultant son téléphone" id="modele_pub">
                <p id="texte1">Flashez sur <br><span>l'insta</span> </p>
                <img src="./images/qr-code-insta.png" alt="" id="qr_code">



            </div>
            <!---->

            <h4 id="FAQ">FAQ's</h4>

            <div class="container-faq">

                <div class="questions">
                    <div class="visible-pannel">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <img src="./images/croix2.svg" alt="croix animation">
                    </div>
                    <div class="toggle-pannel">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem et asperiores, quod qui in ducimus rerum nisi dolorum. Optio, vel?</p>
                    </div>
                </div>

                <div class="questions">
                    <div class="visible-pannel">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <img src="./images/croix2.svg" alt="croix animation">
                    </div>
                    <div class="toggle-pannel">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus neque et, excepturi sequi laboriosam at sit exercitationem repellat voluptate aliquam? Officiis inventore quibusdam doloremque amet quidem dolor quod praesentium in, ullam tenetur corrupti ducimus commodi, minima, nam maiores temporibus assumenda necessitatibus natus voluptas! Mollitia distinctio consequuntur eos aut voluptatibus pariatur?</p>
                    </div>
                </div>

                <div class="questions">
                    <div class="visible-pannel">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <img src="./images/croix2.svg" alt="croix animation">
                    </div>
                    <div class="toggle-pannel">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, est!</p>
                    </div>
                </div>

                <div class="questions">
                    <div class="visible-pannel">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <img src="./images/croix2.svg" alt="croix animation">
                    </div>
                    <div class="toggle-pannel">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati iusto soluta sunt quos ex, quidem a. Perferendis non corporis dolore reiciendis corrupti temporibus voluptatum veniam aperiam nemo cumque fugit atque facere eius veritatis facilis, qui vero libero, molestias optio fuga labore, similique sint. Tempora enim, eum quia, repellendus rerum repellat quae quas error reprehenderit dolorum est nesciunt ducimus provident tenetur!</p>
                    </div>
                </div>

            </div>



            <!-- ------------------------------ -->



        </div>


        </div>

        <div class="illustration_bas">
            <img src="./images/Illustration_bas.png" alt="illustration vectorielle">
        </div>

    </main>

    <?php
    include('./common/footer.php')
    ?>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="./index.js"></script>


</body>

</html>