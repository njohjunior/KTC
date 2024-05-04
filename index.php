<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTC CENTER</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Inclusion du header avec php-->
    <?php require_once (__DIR__ . '/pages/header.php'); ?>

    <main>
        <section class="caro border-bottom border-primary border-2">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/caro1.png" class="d-block w-100" alt="carousel 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/caro2.png" class="d-block w-100" alt="carousel 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/caro3.png" class="d-block w-100" alt="carousel 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section class="bg-light py-4">
            <div class="container">
                <div class="row pb-3">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <h1 class="border-bottom border-warning border-2">Nos Formations</h1>
                    </div>
                </div>
                <div class="row">

                    <div class="col-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="img/card1.jpg" class="card-img-top" alt="image d'une dev">
                            <div class="card-body">
                                <h5 class="card-title">Dev Application</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
                                    minima delectus at, reprehenderit vero mollitia velit magni nisi officiis quis
                                    asperiores.
                                </p>
                                <a href="#" class="btn btn-primary">Découvrir</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="img/card3.jpg" class="card-img-top" alt="image d'une secretaire">
                            <div class="card-body">
                                <h5 class="card-title">Assitante De Direction</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
                                    minima delectus at, reprehenderit vero mollitia velit magni nisi officiis quis
                                    asperiores.
                                </p>
                                <a href="#" class="btn btn-primary">Découvrir</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="img/card2.jpg" class="card-img-top" alt="image d'un maintenancier">
                            <div class="card-body">
                                <h5 class="card-title">Maintenance Réseaux</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
                                    minima delectus at, reprehenderit vero mollitia velit magni nisi officiis quis
                                    asperiores.
                                </p>
                                <a href="#" class="btn btn-primary">Découvrir</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="apropos py-4">
            <div class="container">
                <div class="row pb-3">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <h1 class="border-bottom border-warning border-2">A Propos De KTC-Center</h1>
                    </div>
                </div>
                <div class="row mb-5 mt-4">
                    <div class="col-6">
                        <h3>«La nouvelle vision de l’informatique.»</h3>
                        <p class="text-justify">
                            <span class="text-primary fw-bold">KTC-CENTER</span> est une initiative de jeunes ingénieurs
                            camerounais d’Allemagne qui ont décidé
                            d’apporter leur contribution dans la formation des jeunes camerounais, mais aussi de les
                            préparer sur le plan technologique, car le monde est de plus en plus digital. Notre but
                            premier est d’apporter une contribution à l’émergence informatique, à la promotion des TIC
                            dans la société afin de répondre présent face aux défis de l’informatisation, et de
                            l’avènement d’un monde digitalisé. Nous sommes spécialisées dans la prestation de services
                            informatiques à savoir la création/hébergement des sites web et applications, la formation
                            professionnelle en informatique et langues (allemand, Anglais) également des solutions IT.
                            La structure existe légalement en Allemagne en tant qu’ONG spécialisée dans la formation et
                            le transfert des technologies vers les pays en voie de développement (PVD).
                        </p>
                    </div>
                    <div class="col-6">
                        <img src="img/ecole.jpg" alt="Apprenant de KTC CENTER" class="w-100 h-100 shadow rounded">
                    </div>
                </div>
                <hr class="bg-tertiary">
                <div class="row mt-5">
                    <div class="col-6">
                        <img src="img/directeur.jpg" alt="Photo du directeur" class="w-100 h-100 shadow rounded">
                    </div>
                    <div class="col-6 mt-4">
                        <h2 class="border-start border-primary border-2 px-2 fw-bold">Mots du directeur :</h2>
                        <h3>«La nouvelle vision de l’informatique.»</h3>
                        <p>
                            Plus qu’un Slogan, mieux qu’un label pour KTC-CENTER, c’est notre ADN. Son principal
                            véhicule est, sans aucun doute, notre recette d’excellence. Nous sommes depuis 2016, en
                            effet, le creuset d’une pépinière de produits compétitifs sur le marché de l’emploi, par la
                            mobilisation de nos instruments de formation les plus performants.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mission bg-black py-4">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3 class="border-start border-primary border-3 px-2 fw-bold text-white"> Nos Missions </h3>
                        <p class="text-white">
                            Nous nous sommes donnés pour mission non seulement de répondre présent, mais de proposer des
                            solutions aux entreprises locales afin de participer au développement du Cameroun, notre
                            rôle ou objectif est également de former la jeunesse camerounaise pour qu’elle soit le
                            relais de demain dans un monde sans cesse digitalisé. Nous sommes une équipe constituée de
                            jeunes avec des valeurs telles que :
                        </p>
                    </div>
                    <div class="col-1">

                    </div>
                    <div class="col-5">
                        <h3 class="border-start border-primary border-3 px-2 fw-bold text-white"> Nos Valeurs </h3>
                        <br>
                        <ul class="text-white fs-5">
                            <li><i class="fa-solid fa-medal"></i> L’excellence académique</li>
                            <li><i class="fa-solid fa-scale-balanced"></i> L’intégrité et la morale</li>
                            <li><i class="fa-solid fa-people-group"></i> L'esprit d'équipe</li>
                            <li><i class="fa-solid fa-handshake"></i> Le partage</li>
                            <li><i class="fa-solid fa-lightbulb"></i> L'innovation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter bg-light py-4">
            <div class="container">
                <div class="row">
                    <div class="col-5 d-flex flex-column">
                        <h3 class="border-start border-primary border-2 px-2 fw-bold"> Souscrire a notre NEWSLETTER :
                        </h3>
                        <p class="fw-bold">Nous faisons souvent certaines annonces et promotions. Abonnez vous pour ne
                            rien rater.</p>
                    </div>
                    <div class="col"></div>
                    <div class="col-6">
                        <h4 class="fw-bold">Veuillez remplir : </h4>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Entrer votre nom.."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <input type="email" class="form-control" placeholder="Entrer votre email.."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary text-white" type="button"
                                id="button-addon2">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once(__DIR__ . '/pages/footer.php'); ?>
    
    <!--CDN BOOTSTRAP JAVASCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>