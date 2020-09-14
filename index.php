
<?php

 

require_once('./Dinosaur.php');
require_once('./Tyronnausorus.php');
require_once('./Triceratops.php');
 
try {

    $denver = new Triceratops('Denver', Dinosaur::GENDER_MALE, 8);
    $rex = new Tyronnausorus('Rex',Dinosaur::GENDER_MALE, 23);
    $paula = new Triceratops('Paula', Dinosaur::GENDER_FEMALE, 46);
  } catch (InvalidArgumentException $e) {

    echo "argument invalide";

} 






 

?>

 

<html>

  <body>

    <h1>PHP Training</h1>

    <p><?php echo $denver->getName() . ': '. $denver->roar(). ': '.$denver->getRace()   ; ?></p>

    <p><?php echo $rex->getName() . ': '. $rex->roar(). ': '.$rex->getRace() ; ?></p>

    <p><?php echo $paula->getName() . ': '. $paula->roar(). ': '.$paula->getRace() ; ?></p>


    </p>

  </body>

</html>