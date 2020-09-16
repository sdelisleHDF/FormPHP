<?php

namespace KNPLabs\Real;

class DinosaurFactory
{
    const ALLOWED_RACES = [
        'Tyrannosaurus',
        'Triceratops',
        'Pterodactyl'
    ];

    public static function create(string $race, string $name, string $gender, int $age): Dinosaur
    {
        if (!in_array($race, self::ALLOWED_RACES)) {
            throw new \InvalidArgumentException();
        }

        $class = 'KNPLabs\Real\Dinosaur\\' . $race;

        return new $class($name, $gender, $age);
    }
}
