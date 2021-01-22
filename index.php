<?php

use App\Autoloader;
use App\Client\Compte as Compteclient;
use App\Banque\{CompteCourant, CompteEpargne};

require_once 'classe/Autoloader.php';
Autoloader::register();

$client = new Compteclient('rameau', 'celia', 'Montereau');

//On instance le compte 
 $compte1 = new CompteCourant($client, 500, 200);
// $compte2 = new CompteClient();

// $compte1 ->setTitulaire('Robert');
// $compte1 ->retirer(200);

echo '<pre>';
var_dump($compte1);
echo '<pre>';

$compteEpargne = new CompteEpargne($client, 200, 10);

var_dump($compteEpargne);
echo '<pre>';



var_dump($client);

// $compteEpargne->verserInterets();
// $compteEpargne->retirer(300);

// var_dump($compteEpargne);
// echo '<pre>';


// $client = new Compteclient;

// var_dump($client) ;
// echo '<pre>';

