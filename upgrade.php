<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upgrade Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <h2>
                    Aggiorna dati film
                </h2>
                <p>
                    Puoi aggiungere o rimuovere tutto tranne il titolo, la descrizione e la data dell'uscita.
                </p>
            </div>
            <div class="col">
                <form action="" method="GET" class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="type_movie" name="type_movie" placeholder="Titolo del film">
                            <label for="type_movie" class="floatingInput">Genere</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="certification_movie" name="certification_movie" placeholder="Titolo del film">
                            <label for="certification_movie" class="floatingInput">Certificazione</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability_movie" id="availability_movie1">
                            <label class="form-check-label" for="availability_movie1">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability_movie" id="availability_movie2" checked>
                            <label class="form-check-label" for="availability_movie2">
                                Default checked radio
                            </label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Aggiorna</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>