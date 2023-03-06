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

    private function setDescription($element)
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

    public function setAvailability($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro availability deve essere una stringa';
        } else {
            $this->availability = $element;
        }
    }
    public function getAvailability()
    {
        return $this->availability;
    }

    public function setType($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro type deve essere una stringa';
        } else {
            $this->type = $element;
        }
    }
    public function getType()
    {
        return $this->type;
    }

    public function setCertification($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro certification deve essere una stringa';
        } else {
            $this->certification = $element;
        }
    }
    public function getCertification()
    {
        return $this->certification;
    }

    public function setLanguage($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro language deve essere una stringa';
        } else {
            $this->language = $element;
        }
    }
    public function getLanguage()
    {
        return $this->language;
    }

    public function setUserVote($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro userVote deve essere una stringa';
        } else {
            $this->userVote = $element;
        }
    }
    public function getUserVote()
    {
        return $this->userVote;
    }

    public function setDuration($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro duration deve essere una stringa';
        } else {
            $this->duration = $element;
        }
    }
    public function getDuration()
    {
        return $this->duration;
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