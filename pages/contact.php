<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>

<body class="bg-dark">
    <!--Inclusion du header avec php-->
    <?php require_once(__DIR__ . '/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="d-flex justify-content-center my-3 text-white fw-bolder">CONTACTEZ NOUS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-7 bg-white rounded py-3">
                <h3 class="fw-bold">AVEZ-VOUS DES QUESTIONS ?</h3>
                <h4>NOUS VOUS CONSEILLONS VOLONTIERS</h4>
                <form>
                    <div class="py-2 mb-3">
                        <input type="text" class="form-control mb-2" placeholder="Noms" aria-describedby="emailHelp">
                        <input type="text" class="form-control mb-2" placeholder="Prénoms" aria-describedby="emailHelp">
                        <input type="email" class="form-control mb-2" placeholder="Email" aria-describedby="emailHelp">
                        <input type="number" class="form-control mb-2" placeholder="Numéro" aria-describedby="emailHelp">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Mon Message</label>
                    </div>
                    <div class="my-2">
                        <button type="submit" class="btn btn-primary fw-bold">ENVOYER MON MESSAGE</button>
                    </div>
                </form>
            </div>
            <div class="col-3 bg-light rounded py-3">
                <h3 class="fw-bold d-flex justify-content-center">Informations</h3>
                <br>
                <ul class="fs-6">
                    <li>
                        <i class="fa-solid fa-phone"></i> (+237) 679 218 617 (Douala) <br><br>
                        <i class="fa-solid fa-phone"></i> (+237) 690 722 267 (Douala) <br><br>
                        <i class="fa-solid fa-phone"></i> (+237) 691 702 783 (Ydé)
                    </li>
                    <br><br>
                    <li>
                        <i class="fa-solid fa-envelope"></i> Info@kamer-training.net
                    </li>
                    <br><br>
                    <li>
                        <i class="fa-solid fa-location-dot"></i> Yaoundé, Biyem-Assi Lac, CMR
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php require_once(__DIR__ . '/footer.php'); ?>

    <!--CDN BOOTSTRAP JAVASCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>