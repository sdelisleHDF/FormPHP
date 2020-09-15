
<?php

 

require_once('./Dinosaur.php');
require_once('./Tyronnausorus.php');
require_once('./Triceratops.php');
require_once('./Spinosaurus.php');
require_once('./Pterodactyl.php');

 
try {

    $denver = new Triceratops('Denver', Dinosaur::GENDER_MALE, 8);
    $rex = new Tyronnausorus('Rex',Dinosaur::GENDER_MALE, 23);
    $sirene = new Spinosaurus('Sirene', Dinosaur::GENDER_FEMALE, 25);
    $paula = new Pterodactyl('Paula', Dinosaur::GENDER_FEMALE, 46);

  } catch (InvalidArgumentException $e) {

    echo "argument invalide";

} 

?>

 

<html>

  <body>

    <h1>PHP Training</h1>

    <p><?php echo $denver->getName() . ': '. $denver->roar(). ': '.$denver->getRace() . ': '. $denver->walk()     ; ?></p>

    <p><?php echo $rex->getName() . ': '. $rex->roar(). ': '.$rex->getRace() . ': '. $rex->walk()  ; ?></p>

    <p><?php echo $sirene->getName() . ': '. $sirene->roar(). ': '.$sirene->getRace() . ': '. $sirene->swim(). ': '. $sirene->walk() ; ?></p>

    <p><?php echo $paula->getName() . ': '. $paula->roar(). ': '.$paula->getRace() . ': '. $paula->fly(). ': '. $paula->walk() ;  ?></p>

    </p>

  </body>

</html>