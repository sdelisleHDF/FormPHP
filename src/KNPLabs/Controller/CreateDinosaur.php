<?php

namespace KNPLabs\Controller;

use KNPLabs\Real\DinosaurFactory;
use KNPLabs\Real\Persister\DinosaurPersister;
use KNPLabs\Routing\Controller;

class CreateDinosaur implements Controller
{
    private $dinosaurPersister;

    public function __construct(DinosaurPersister $dinosaurPersister)
    {
        $this->dinosaurPersister = $dinosaurPersister;
    }

    public function handleRequest(): void
    {
        if (!empty($_POST)) {
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $race = isset($_POST['race']) ? $_POST['race'] : null;
            $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
            $age = isset($_POST['age']) ? (int) $_POST['age'] : null;

            $dinosaur = DinosaurFactory::create($race, $name, $gender, $age);

            $this->dinosaurPersister->save($dinosaur);

            header('Location: http://localhost/FormPHP');

            return;
        }

        ViewRenderer::render('createDinosaur.php');
    }
}
