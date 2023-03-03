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

};

var_dump(new Movie);

$bussanoAllaPorta = new Movie;
var_dump($bussanoAllaPorta);

$avatarLaViaDellAcqua = new Movie;
var_dump($avatarLaViaDellAcqua);

$topGunMaverick = new Movie;
var_dump($topGunMaverick);
