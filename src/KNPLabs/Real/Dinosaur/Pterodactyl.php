<?php

namespace KNPLabs\Real\Dinosaur;

use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\FlyingDinosaur;
use KNPLabs\Real\LandDinosaur;

class Pterodactyl extends Dinosaur implements LandDinosaur, FlyingDinosaur
{
    private const RACE = "Pterodactyl";

    public function getRace(): string
    {
        return self::RACE;
    }
    
    public function roar(): string
    {
        if (!$this->isAdult()) {
            return "moo...";
        } else {
            return "WVOWVOWVO!!!!";
        }
    }
    public function walk(): string
    {
        return 'I\'m running fast!';
    }

    public function fly(): string
    {
        return 'I\'m Flyning  very fast!';
    }
}
