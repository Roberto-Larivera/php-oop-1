<?php

class Movie {
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
        $this->setpublicationDate($_description);
    }

    public function setTitle($element){
        if (is_numeric($element)) {
            echo 'Il parametro title deve essere una stringa';
        } else {
            $this->title = $element;
        }
    }
    public function setDescription($element){
        if (is_numeric($element)) {
            echo 'Il parametro description deve essere una stringa';
        } else {
            $this->description = $element;
        }
    }
    public function setpublicationDate($element){
        if (is_numeric($element)) {
            echo 'Il parametro publicationDate deve essere una stringa';
        } else {
            $this->publicationDate = $element;
        }
    }
};

//var_dump(new Movie);

$bussanoAllaPorta = new Movie('Bussano Alla Porta', '02/02/2023', 'La piccola Wen, adottata dalla coppia formata da Eric e Andrew si appresta a una gioiosa vacanza in una baita in mezzo al bosco quando viene avvicinata da un uomo inquietante...');
var_dump($bussanoAllaPorta);

$avatarLaViaDellAcqua = new Movie('Avatar - La via dell\'acqua','14/12/2022','Jake Sully vive con la sua nuova famiglia sul pianeta Pandora. Ma quando una vecchia, familiare minaccia torna ad affacciarsi...');
var_dump($avatarLaViaDellAcqua);

$topGunMaverick = new Movie('Top Gun: Maverick','25/05/2022','Dopo più di trent’anni di servizio nella Marina, il Tenente Pete “Maverick” Mitchell è proprio dove vorrebbe essere: un pilota coraggioso che può spingersi oltre ogni limite, cercando di schivare l’avanzamento...');
var_dump($topGunMaverick);
