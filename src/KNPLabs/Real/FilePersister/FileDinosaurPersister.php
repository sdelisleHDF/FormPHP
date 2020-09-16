<?php

namespace KNPLabs\Real\FilePersister;

use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\Persister\DinosaurPersister;
use KNPLabs\Real\Provider\DinosaursProvider;

class FileDinosaurPersister implements DinosaurPersister
{
    private $storageFilePath;
    private $dinosaurProvider;

    public function __construct(
        string $storageFilePath,
        DinosaursProvider $dinosaurProvider
    ) {
        $this->storageFilePath = $storageFilePath;
        $this->dinosaurProvider = $dinosaurProvider;
    }

    public function save(Dinosaur $dinosaur): void
    {
        $allDinosaurs = $this->dinosaurProvider->all();

        $allDinosaurs[] = $dinosaur;

        $serializedDinosaurs = $this->serialize($allDinosaurs);

        file_put_contents($this->storageFilePath, $serializedDinosaurs);
    }

    public function serialize(array $dinosaurs): string
    {
        $rawDinosaurs = [];

        foreach ($dinosaurs as $dinosaur) {
            $rawDinosaurs[] = $dinosaur->toArray();
        }

        return json_encode($rawDinosaurs);
    }
}
