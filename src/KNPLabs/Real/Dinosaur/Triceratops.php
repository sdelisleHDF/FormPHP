<?php

namespace KNPLabs\Real\Dinosaur;

use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\LandDinosaur;

class Triceratops extends Dinosaur implements LandDinosaur
{
    private const RACE = "Triceratops";

    public function getRace(): string
    {
        return self::RACE;
    }
    
    public function roar(): string
    {
        if (!$this->isAdult()) {
            return "moo...";
        } else {
            return "MOOOOOOOO!!!!";
        }
    }
    public function walk(): string
    {
        return 'I\'m running fast!';
    }
}
