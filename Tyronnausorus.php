
<?php

require_once('Dinosaur.php');
require_once('LandDinosaur.php');


class Tyronnausorus extends Dinosaur implements LandDinosaur

  

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

