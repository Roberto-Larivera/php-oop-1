<?php

class Movie
{
    private $title;
    private $description;
    public $availability;
    private $publicationDate;
    public $type;
    public $certification;
    public $language;
    public $userVote;
    public $duration;
    public $whereToLook;

    function __construct(string $_title, string $_publicationDate, string $_description,)
    {
        $this->setTitle($_title);
        $this->setDescription($_publicationDate);
        $this->setPublicationDate($_description);
    }

    private function setTitle($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro title deve essere una stringa';
        } else {
            $this->title = $element;
        }
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setDescription($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro description deve essere una stringa';
        } else {
            $this->description = $element;
        }
    }
    public function getDescription()
    {
        return $this->description;
    }
    
    private function setPublicationDate($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro publicationDate deve essere una stringa';
        } else {
            $this->publicationDate = $element;
        }
    }
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }
};

//var_dump(new Movie);

$bussanoAllaPorta = new Movie('Bussano Alla Porta', '02/02/2023', 'La piccola Wen, adottata dalla coppia formata da Eric e Andrew si appresta a una gioiosa vacanza in una baita in mezzo al bosco quando viene avvicinata da un uomo inquietante...');
//var_dump($bussanoAllaPorta);

$avatarLaViaDellAcqua = new Movie('Avatar - La via dell\'acqua', '14/12/2022', 'Jake Sully vive con la sua nuova famiglia sul pianeta Pandora. Ma quando una vecchia, familiare minaccia torna ad affacciarsi...');
//var_dump($avatarLaViaDellAcqua);

$topGunMaverick = new Movie('Top Gun: Maverick', '25/05/2022', 'Dopo più di trent’anni di servizio nella Marina, il Tenente Pete “Maverick” Mitchell è proprio dove vorrebbe essere: un pilota coraggioso che può spingersi oltre ogni limite, cercando di schivare l’avanzamento...');
//var_dump($topGunMaverick);

$movies =[];

$movies[] = $bussanoAllaPorta;
$movies[] = $avatarLaViaDellAcqua;
$movies[] = $topGunMaverick;


$title_movie = $_GET['title_movie']??null;
$date_movie = $_GET['date_movie']??null;
$description_movie = $_GET['description_movie']??null;

if($title_movie !== null && $date_movie !== null && $description_movie !== null){
    $movies[]=  new Movie($title_movie, $date_movie,$description_movie );
    
}
var_dump($movies);

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
            <?php foreach($movies as $movie){ ?>
            <div class="col mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->getTitle() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->getPublicationDate() ?></h6>
                        <p class="card-text"><?php echo $movie->getDescription() ?></p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>