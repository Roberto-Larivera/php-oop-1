<?php
    require_once __DIR__ . '/classes/Movie.php';
    require_once __DIR__.'/server.php';


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
    <div class="container p-5">
        <div class="row row-cols-5">
            <?php foreach($movies as $keyMovie => $movie){ ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
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
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>