
<?php

require_once('Dinosaur.php');
require_once('LandDinosaur.php');

 

class Triceratops extends Dinosaur  implements LandDinosaur
  

{
    private const RACE = "Triceratops";

    public function getRace(): string {
    	return self::RACE;
    }
    
        public function roar(): string {
        if (!$this->isAdult()) {
            return "moo...";
        }
        else {return "MOOOOOOOO!!!!";}
    }
    public function walk(): string
    {
        return 'I\'m running fast!';
    }
}
