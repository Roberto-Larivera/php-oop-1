<?php
include_once __DIR__.'/server.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <h2>
                    Aggiungi un nuovo film
                </h2>
                <p>
                    Aggiungi il titolo, la descrizione e la data dell'uscita, il resto, lo puoi fare in un secondo momento se vuoi!
                </p>
            </div>
            <div class="col">
                <form action="" method="GET" class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title_movie" name="title_movie" placeholder="Titolo del film">
                            <label for="title_movie" class="floatingInput">Titolo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="date_movie" name="date_movie" placeholder="Data di uscita del film">
                            <label for="date_movie" class="floatingInput">Data Uscita</label>
                        </div>
                    </div>
                    <div class="form-floating col-6 mb-3 align-self-stretch">
                        <textarea class="form-control h-100" id="description_movie" name="description_movie" rows="3" placeholder="La migliore descrizione di uesto film"></textarea>
                        <label for="description_movie" class="floatingTextarea2">Descrizione</label>
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row row-cols-4">
            <?php foreach($movies as $keyMovie => $movie){ ?>
            <div class="col mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->getTitle() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->getPublicationDate() ?></h6>
                        <ul>
                            <?php foreach($movie -> type as $typeSingle){ ?>
                            <li>
                            <?php echo $typeSingle   ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <ul>
                            <?php foreach($movie -> platform as $typeSingle){ ?>
                            <li>
                            <?php echo $typeSingle   ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <p class="card-text"><?php echo $movie->getDescription() ?></p>
                        <a <?php echo 'href="upgrade.php/?id='.$keyMovie.'"' ?> class="card-link">Aggiorna Dati</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>