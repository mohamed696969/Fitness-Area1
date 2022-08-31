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
    <div id="barre" style="width: 96.9574px;"></div>


    <header class="nav_header">
        <?php
        include("./common/menu.php")
        ?>
    </header>


    <main id="inscription_main">
        <img src="./images/illustration-Inscription.png" alt="illustration vectorielle" id="Illustration_Flat">
        <div class="sinscrire">
            <div class="texte_inscription">
                <h1>Inscription</h1>
                <p>Pense à compléter <br>le formulaire</p>
            </div>


            <div class="input_inscription">
                <div class="nomNmail">
                    <input type="text" placeholder="Prénom">
                    <input type="text" placeholder="Nom">
                    <input type="mail" placeholder="Adresse mail*">
                </div>



                <div class="dateNtel">
                    <input type="date">
                    <input type="tel" placeholder="Numéro de téléphone">
                </div>

                <div class="forfait-select">

                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">Selectionne un forfait</option>
                            <option value="1">FORFAIT CLASSIC</option>
                            <option value="2">FORFAIT PREMIUM</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                    </div>
                </div>

                <div class="btn_sent">Envoyer</div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d711857.218135778!2d4.345071696553824!3d45.81742129157116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea80d7d19023%3A0xd33f60057a76e78a!2sBusiness%20Web!5e0!3m2!1sfr!2sfr!4v1646231242405!5m2!1sfr!2sfr" width="800" height="550" style="border:0;" allowfullscreen="" loading="lazy" id="iframe_inscription"></iframe>






        </div>


    </main>

    <?php
    include("./common/footer.php")
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./index.js"></script>

</body>

</html>