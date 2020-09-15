<<<<<<< Updated upstream

<?php

require_once('Dinosaur.php');
require_once('LandDinosaur.php');
require_once('FlyingDinosaur.php');
 

class Pterodactyl extends Dinosaur  implements LandDinosaur, FlyingDinosaur
  

{
    private const RACE = "Pterodactyl";

    public function getRace(): string {
    	return self::RACE;
    }
    
        public function roar(): string {
        if (!$this->isAdult()) {
            return "moo...";
        }
        else {return "WVOWVOWVO!!!!";}
    }
    public function walk(): string
    {
        return 'I\'m running fast!';
    }

    public function fly(): string
    {
        return 'I\'m Flyning  very fast!';
    }
=======
<?php


require_once('./FlyingDinosaur.php');
require_once('./LandDinosaur.php');


class Pterodactyl extends Dinosaur implements FlyingDinosaur, LandDinosaur
 
{
private const RACE = "Pterodactyl";


    public function roar(): string {
        return "roar...";
    }

    public function fly(): string {
        return "fly...";
    }

    public function walk(): string {
        return "walk...";
    }

    public function getRace(): string {
        return self::RACE;
    }
    
 

>>>>>>> Stashed changes
}
