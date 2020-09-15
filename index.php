
<?php

use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\Dinosaur\Pterodactyl;
use KNPLabs\Real\Dinosaur\Spinosaurus;
use KNPLabs\Real\Dinosaur\Triceratops;
use KNPLabs\Real\Dinosaur\Tyronnausorus;


include('./vendor/autoload.php');

// use the factory to create a Faker\Generator instance
$faker = Faker\factory::create();

$dinosaurs = [];

 
try {
    for ($i=0; $i < 5; $i++) { 
      $dinosaurs[] = new Triceratops($faker->firstName,  $faker->randomElement([Dinosaur::GENDER_MALE,Dinosaur::GENDER_FEMALE]), rand(1,100));
    }

    for ($i=0; $i < 5; $i++) { 
      $dinosaurs[] = new Tyronnausorus($faker->firstName,  $faker->randomElement([Dinosaur::GENDER_MALE,Dinosaur::GENDER_FEMALE]), rand(1,100));
    }

    for ($i=0; $i < 5; $i++) { 
      $dinosaurs[] = new Spinosaurus($faker->firstName,  $faker->randomElement([Dinosaur::GENDER_MALE,Dinosaur::GENDER_FEMALE]), rand(1,100));
    }

    for ($i=0; $i < 5; $i++) { 
      $dinosaurs[] = new Pterodactyl($faker->firstName,  $faker->randomElement([Dinosaur::GENDER_MALE,Dinosaur::GENDER_FEMALE]), rand(1,100));
    }

  } catch (InvalidArgumentException $e) {
    var_dump($e);
    echo "argument invalide";

} 

?>

 

<html>

  <body>

    <h1>PHP Training</h1>
	
    <?php foreach ($dinosaurs as $dinosaur) : ?>
      <div>
        <h2><?php echo $dinosaur->getName(); ?></h2>
        <strong><?php echo ($dinosaur->isAdult()?"Adult" :"Baby")." (".$dinosaur->getAge().") ".$dinosaur->getRace()." ".$dinosaur->getGender() ?> </strong>
        <p><?php echo $dinosaur->roar(); ?></p>
      </div>
      <hr>
    <?php endforeach; ?>

  </body>

</html>