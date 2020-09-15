<<<<<<< Updated upstream

<?php

require_once('Dinosaur.php');
require_once('LandDinosaur.php');
require_once('SeaDinosaur.php');
 

class Spinosaurus extends Dinosaur  implements LandDinosaur, SeaDinosaur
  

{
    private const RACE = "Spinosaurus";

    public function getRace(): string {
    	return self::RACE;
    }
    
        public function roar(): string {
        if (!$this->isAdult()) {
            return "moo...";
        }
        else {return "GLOGLOLGO!!!!";}
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
=======
<?php

require_once('./SeaDinosaur.php');
require_once('./LandDinosaur.php');


class Spinosaurus extends Dinosaur implements SeaDinosaur, LandDinosaur
 
{

    private const RACE = "Spinosaurus";
    
    public function roar(): string {
        return "roar...";
    }

    public function swim(): string {
        return "swim...";
    }

    public function walk(): string {
        return "walk...";
    }

    public function getRace(): string {
        return self::RACE;
    }
    


 

}
>>>>>>> Stashed changes
