<?php
require_once __DIR__ . '/classes/Movie.php';

$bussanoAllaPorta = new Movie('Bussano Alla Porta', '02/02/2023', 'La piccola Wen, adottata dalla coppia formata da Eric e Andrew si appresta a una gioiosa vacanza in una baita in mezzo al bosco quando viene avvicinata da un uomo inquietante...');
//var_dump($bussanoAllaPorta);

$avatarLaViaDellAcqua = new Movie('Avatar - La via dell\'acqua', '14/12/2022', 'Jake Sully vive con la sua nuova famiglia sul pianeta Pandora. Ma quando una vecchia, familiare minaccia torna ad affacciarsi...');
//var_dump($avatarLaViaDellAcqua);

$topGunMaverick = new Movie('Top Gun: Maverick', '25/05/2022', 'Dopo più di trent’anni di servizio nella Marina, il Tenente Pete “Maverick” Mitchell è proprio dove vorrebbe essere: un pilota coraggioso che può spingersi oltre ogni limite, cercando di schivare l’avanzamento...');
//var_dump($topGunMaverick);

$topGunMaverick->setType(['Azione', 'Dramma']);
$topGunMaverick->setPlatform(['Netflix', 'PrimeVideo']);
$bussanoAllaPorta->setType(['Azione', 'Famiglia']);
$bussanoAllaPorta->setPlatform(['Netflix', 'PrimeVideo']);
$avatarLaViaDellAcqua->setType(['Azione', 'Fantascenza']);
$avatarLaViaDellAcqua->setPlatform(['Disney+']);

$movies = [];

$movies[] = $bussanoAllaPorta;
$movies[] = $avatarLaViaDellAcqua;
$movies[] = $topGunMaverick;
