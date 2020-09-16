<?php

namespace KNPLabs\Real\Persister;

use KNPLabs\Real\Dinosaur;

interface DinosaurPersister
{
    public function save(Dinosaur $dinosaur): void;
}
