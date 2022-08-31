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

<body id="body" class="dark-mode">



    <div class="cookie-consent-modal">

        <div class="bloc_cookies">
            <div class="content">
                <h1>Salut c'est nous...</h1>
                <p id="cookies">les Cookies !</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa eligendi molestiae adipisci ut fugiat perspiciatis quos recusandae omnis cupiditate. Quibusdam impedit aut autem architecto, eveniet, veritatis nobis unde iure asperiores tempore accusamus laudantium at dicta.</p>
                <div class="btns">
                    <button class="btn cancel">cancel</button>
                    <button class="btn accept">accept</button>
                </div>
            </div>
        </div>

    </div>
    <header class="nav_header">
        <?php
        include("./common/menu.php");
        ?>

    </header>

    <main>

        <div class="container1" id="blur">


            <!-- ------Carouselle------------- -->

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item" style="transition: .9s">
                        <img src="./images/yoga.png" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item active" style="transition: .9s;">
                        <img src="./images/First_slide.png" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" style="transition: .9s">
                        <img src="./images/course.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- ----------Maintenant 2 semaines offertes ----------- -->
            <div class="fond_offre reveal">
                <section class="Offre">
                    <article>
                        <h1>Maintenant <br> <span id="contour-lettre">2 semaines offertes !</span></h1>
                        <p>
                            Vous souhaitez tester avant d'acheter ? C'est possible avec Fitness-Area ! <br> Profitez des 2 semaines offertes pour essayer les nombreuses machines que vous propose la salle ainsi que ses nombreuses fonctionnalitées. Les coach restent à votre disposition en cas de besoins particuliers sur le plan physique, mentale et alimentaire. L'équipe Fitness-Area vous souhaite un bon entrainement !</p>

                        <button class="btn_inscrire2"><a href="sinscrire.html">S'inscrire</a> </button>
                    </article>


                </section>
                <div class="bloc-motiv-jaune">
                    <img src="./images/course.jpg" alt="homme qui court">
                </div>
            </div>


            <div class="maintenant">
                <div class="Now">
                    <p>Maintenant</p>
                </div>
                <div class="Now">
                    <p>Maintenant</p>
                </div>
                <div class="Now">
                    <p>Maintenant</p>
                </div>
                <div class="Now">
                    <p>Maintenant</p>
                </div>
                <div class="Now">
                    <p>Maintenant</p>
                </div>
                <div class="Now">
                    <p>Maintenant</p>
                </div>
                <div class="Now">
                    <p>Maintenant</p>
                </div>
                <div class="Now">
                    <p>Maintenant</p>
                </div>
                <div class="Now">
                    <p>Maintenant</p>
                </div>


            </div>



            <!-- --------A vos marque------------------ -->
            <section class="A-vos-marque reveal">
                <h2>
                    à vos marque... prêt ? partez !
                </h2>
                <h3>MOTIV</h3>

                <div class="prestation">
                    <div class="muscle">
                        <a href="muscler.html"><img src="./images/muscle.png" alt="homme qui se muscle"></a>
                        <span>Se muscler</span>
                    </div>

                    <div class="détente">
                        <a href="./detente.php"><img src="./images/detente.png" alt="femme qui se détend "></a>
                        <span>Se détendre</span>
                    </div>
                    <div class="maigre">
                        <a href="maigrir.html"><img src="./images/maigrir.png" alt="couple qui souhaite maigrir"></a>
                        <span>Se dépasser</span>
                    </div>
                </div>
            </section>
            <!-- A-vos-marque Carousel -->

            <section class="product">

                <div class="product-container">

                    <div class="Bloc_prestation">
                        <a href="maigrir.html"><img src="./images/muscle.png" alt="maigrir" id="muscle_img"></a>
                        <span id="muscle">Se muscler</span>

                    </div>


                    <div class="Bloc_prestation">

                        <a href="maigrir.html"><img src="./images/detente.png" alt="maigrir"></a>
                        <span>Se détendre</span>
                    </div>

                    <div class="Bloc_prestation">
                        <a href="maigrir.html"><img src="./images/maigrir.png" alt="maigrir"></a>
                        <span>Se dépasser</span>
                    </div>



                </div>


            </section>




            <div class="video">
                <video controls src="./images/pub.mp4" poster="./images/miniature.png" id="myvideo" muted="muted"></video>

                <img src="./images/motif1.png" alt="" id="motif1">
                <img src="./images/motif1.png" alt="" id="motif2">
            </div>

            <!-- --------Articles-------------- -->






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


            <section class="location">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d711857.218135778!2d4.345071696553824!3d45.81742129157116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea80d7d19023%3A0xd33f60057a76e78a!2sBusiness%20Web!5e0!3m2!1sfr!2sfr!4v1646231242405!5m2!1sfr!2sfr" width="800" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                <div class="location-info">
                    <span id="retrouver">
                        <h5>Nous retrouver au</h5>
                    </span><br>
                    <span id="adresse">9 allée du lorem</span><br>
                    <hn id="horaire">Fitness-Area vous ouvre ses portes du<br><span id="surlignement">lundi au vendredi de 6h30 à 22h00</span></hn><br>

                    <hn id="itinéraire">Information d'itinéraire</hn>
                    <p id="texte-itinéraire">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum dolores voluptates sunt laudantium, molestiae vero, accusantium molestias incidunt sit in temporibus iure eius et! Consequatur nulla quis enim a qui!</p>

                </div>
                <img src="./images/map.gif" alt="animation map" id="map">
            </section>



            <div class="Articles_compile">

                <div class="Article_bloc">
                    <div class="carre_texte">
                        <img src="./images/detente.png" alt="femme qui se détend">
                        <div class="texte_bloc">
                            <h1>24 Avril 2022</h1>
                            <h2>5 astuces pour maigrir</h2>
                            <p>Boire régulièrement est le meilleur moyen d'éviter la déshydratation. Buvez de l'eau avant, pendant et après l'exercice...</p>
                            <div class="btn_bloc"><a href="#">En savoir +</a></div>

                        </div>
                    </div>
                </div>


                <div class="Article_bloc">
                    <div class="carre_texte">
                        <img src="./images/Habitude.png" alt="femme qui s'étire">
                        <div class="texte_bloc">
                            <h1>24 Avril 2022</h1>
                            <h2>Les bonnes habitudes du quotidien</h2>
                            <p>Il est parfois difficile d'être heureux au quotidien. Nous avons tous des engagements qui incluent le travail, la technologie etc... </p>
                            <div class="btn_bloc"><a href="#">En savoir +</a></div>

                        </div>
                    </div>
                </div>

                <div class="Article_bloc">
                    <div class="carre_texte">
                        <img src="./images/noix_cajoux.png" alt="noix de cajoux posé sur la table">
                        <div class="texte_bloc">
                            <h1>24 Avril 2022</h1>
                            <h2>Nos conseils nutrition !</h2>
                            <p>Pour fonctionner correctement, le corps humain a besoin d’énergie. Ces besoins énergétiques sont couverts par les aliments... </p>
                            <div class="btn_bloc"><a href="#">En savoir +</a></div>

                        </div>
                    </div>
                </div>

                <div class="Article_bloc">
                    <div class="carre_texte">
                        <img src="./images/Muscle-article.png" alt="biceps contracté">
                        <div class="texte_bloc">
                            <h1>24 Avril 2022</h1>
                            <h2>5 astuces pour se muscler</h2>
                            <p>Bien sûr, il faut faire des efforts pour obtenir des résultats, mais avec quelques astuces et conseils, vous pourrez gagner du muscle plus rapidement...</p>
                            <div class="btn_bloc"><a href="#">En savoir +</a></div>

                        </div>
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
            <section class="product">

                <div class="product-container">

                    <div class="Bloc_carousel">

                        <div class="Article_bloc">
                            <div class="carre_texte">
                                <img src="./images/noix_cajoux.png" alt="">
                                <div class="texte_bloc">
                                    <h1>24 Avril 2022</h1>
                                    <h2>Nos conseils nutrition !</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae nulla repellat.</p>
                                    <div class="btn_bloc"><a href="#">En savoir +</a></div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="Bloc_carousel">

                        <div class="Article_bloc">
                            <div class="carre_texte">
                                <img src="./images/noix_cajoux.png" alt="">
                                <div class="texte_bloc">
                                    <h1>24 Avril 2022</h1>
                                    <h2>Nos conseils nutrition !</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae nulla repellat.</p>
                                    <div class="btn_bloc"><a href="#">En savoir +</a></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="Bloc_carousel">

                        <div class="Article_bloc">
                            <div class="carre_texte">
                                <img src="./images/noix_cajoux.png" alt="">
                                <div class="texte_bloc">
                                    <h1>24 Avril 2022</h1>
                                    <h2>Nos conseils nutrition !</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae nulla repellat.</p>
                                    <div class="btn_bloc"><a href="#">En savoir +</a></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="Bloc_carousel">

                        <div class="Article_bloc">
                            <div class="carre_texte">
                                <img src="./images/noix_cajoux.png" alt="">
                                <div class="texte_bloc">
                                    <h1>24 Avril 2022</h1>
                                    <h2>Nos conseils nutrition !</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae nulla repellat.</p>
                                    <div class="btn_bloc"><a href="#">En savoir +</a></div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </section>
            <!-- -------Location----------------  -->



            <!-- -------Avis et commentaires----------------  -->



            <div class="recrute-newsletter">

                <div class="candidature">
                    <hn id="on-recrute">
                        <h6> On recrute !</h6>
                    </hn>
                    <p>Ici ça recrute ! Vous êtes en recherche de stages, d'alternance ou d'emploie ? N'hésitez pas à nous laisser votre CV avec votre lettre de motivation afin vous faire un retour le plus rapidement possible. </p>
                    <input type="file" name="Votre CV" id="cv"><br>
                    <div class="btn">Envoyer</div>
                </div>

                <div class="newsletter">
                    <hn id="newsletter">
                        <h6>Newsletter</h6>
                    </hn>
                    <p>Vous souhaitez ne rien manquer à nos offres promotionnelles ou à l'actualité de la salle ? N'attendez plus, la newsletter est faites pour vous !</p>
                    <input type="email" name="mail" id="email" placeholder="Entrez votre email"><br>
                    <div class="btn">Envoyer</div>


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