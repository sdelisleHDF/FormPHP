<?php

namespace KNPLabs\Real\Dinosaur;

use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\LandDinosaur;

class Tyrannosaurus extends Dinosaur implements LandDinosaur

  

{



    private const RACE = "Tyranausore";


    public function getRace(): string {
    	return self::RACE;
    }
    

    public function roar(): string {
        if (!$this->isAdult()) {
            return "roar...";
        }
        elseif ($this->isMale()) {
            return "ROOOAAAAAAR!!!!";
        }
        else {
            return "GGGGGGRRRROOOOAAAAARRRRRR!!!!";
        }
    }


    public function walk(): string
    {
        return 'I\'m running fast!';
    }

}

