<?php
namespace KNPLabs\Real\Dinosaur;

use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\LandDinosaur;
use KNPLabs\Real\SeaDinosaur;

class Spinosaurus extends Dinosaur implements LandDinosaur, SeaDinosaur
{
    private const RACE = "Spinosaurus";

    public function getRace(): string
    {
        return self::RACE;
    }
    
    public function roar(): string
    {
        if (!$this->isAdult()) {
            return "moo...";
        } else {
            return "GLOGLOLGO!!!!";
        }
    }
    public function walk(): string
    {
        return 'I\'m running fast!';
    }

    public function swim(): string
    {
        return 'I\'m swimming very fast!';
    }
}
