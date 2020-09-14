
<?php

 

require_once('./Dinosaur.php');

 
try {

    $denver = new Dinosaur('Denver', Dinosaur::GENDER_MALE, 8);
    $rex = new Dinosaur('Rex',Dinosaur::GENDER_MALE, 23);
    $paula = new Dinosaur('Paula', Dinosaur::GENDER_FEMALE, 46);

} catch (InvalidArgumentException $e) {

    echo "argument invalide";

}





 

?>

 

<html>

  <body>

    <h1>PHP Training</h1>

    <p><?php echo $denver->getName() . ': '. $denver->roar(); ?></p>

    <p><?php echo $rex->getName() . ': '. $rex->roar(); ?></p>

    <p><?php echo $paula->getName() . ': '. $paula->roar(); ?></p>

    </p>

  </body>

</html>