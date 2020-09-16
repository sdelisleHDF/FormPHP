<?php

namespace KNPLabs\Real\FileProvider;

use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\Provider\DinosaursProvider;
use KNPLabs\Real\Dinosaur\Pterodactyl;
use KNPLabs\Real\Dinosaur\Triceratops;
use KNPLabs\Real\Dinosaur\Tyrannosaurus;

class FileDinosaursProvider implements DinosaursProvider
{
    public function all(): array
    {
        $fileJson = json_decode(file_get_contents('./var/data/dinosaurs.json'));
        var_dump($fileJson);
        return [];
    }

    public function searchByName(string $ch): array
    {
        
        return [] ;
    }
}
