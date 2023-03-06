<?php
include_once __DIR__.'/classes/Movie.php';

$upgradeBol= false;
$idMovie = $_GET['id']??=null;
if ($idMovie !== null && is_numeric($idMovie)){
    $upgradeBol= true;
    $onlyMovie = $movies[$idMovie];
}
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
    <?php if($upgradeBol){ ?>
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <h2>
                    Aggiorna dati film
                </h2>
                <h3>
                    <?php $onlyMovie-> getTitle() ?>
                </h3>
                <p>
                    Puoi aggiungere o rimuovere tutto tranne il titolo, la descrizione e la data dell'uscita.
                </p>
            </div>
            <div class="col">
                <form action="" method="GET" class="row justify-content-center">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="type_movie" name="type_movie" placeholder="...">
                            <label for="type_movie" class="floatingInput">Genere film</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="platform_movie" name="platform_movie" placeholder="...">
                            <label for="platform_movie" class="floatingInput">Piattaforma Streaming</label>
                        </div>
                    </div>
                    
                    <div class="col-3 ">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="language_movie" name="language_movie" placeholder="...">
                            <label for="language_movie" class="floatingInput">Lingua del film</label>
                        </div>
                    </div>
                    <div class="col-3 ">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="duration_movie" name="duration_movie" placeholder="...">
                            <label for="duration_movie" min="10" max="1000" class="floatingInput">Durata film</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="certification_movie" name="certification_movie" placeholder="...">
                            <label for="certification_movie" class="floatingInput">Certificazione età</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability_movie" id="availability_movie1" value="1">
                            <label class="form-check-label" for="availability_movie1">
                                Disponibile
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability_movie" id="availability_movie2" value="0" checked>
                            <label class="form-check-label" for="availability_movie2">
                                Non Disponibile
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
    <?php }?>
</body>

</html>