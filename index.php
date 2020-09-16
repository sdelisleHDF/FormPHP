<?php

include('./vendor/autoload.php');

use KNPLabs\Controller\CreateDinosaur;
use KNPLabs\Controller\ListDinosaurs;
use KNPLabs\Real\FilePersister\FileDinosaurPersister;
use KNPLabs\Real\FileProvider\FileDinosaursProvider;
use KNPLabs\Routing\NotFoundException;
use KNPLabs\Routing\Router;

$dinosaursProvider = new FileDinosaursProvider('./var/data/dinosaurs.json');
$dinosaurPersister = new FileDinosaurPersister('./var/data/dinosaurs.json', $dinosaursProvider);

try {
    $router = new Router();
} catch (RuntimeException $e) {
    echo $e->getMessage();

    return;
}

$router->addController('/FormPHP/', new ListDinosaurs($dinosaursProvider));
$router->addController('/FormPHP/create', new CreateDinosaur($dinosaurPersister));

try {
    $router->handleRequest();
} catch (NotFoundException $e) {
    echo 'Not found';
}
