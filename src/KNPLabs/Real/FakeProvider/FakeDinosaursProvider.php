<?php // src/KNPLabs/Real/FakeProvider/FakeDinosaursProvider.php
	
 
	
namespace KNPLabs\Real\FakeProvider;
	
 
	
use Faker\Factory;
	
use KNPLabs\Real\Dinosaur;
	
use KNPLabs\Real\Provider\DinosaursProvider;
	
use KNPLabs\Real\Dinosaur\Pterodactyl;
	
use KNPLabs\Real\Dinosaur\Triceratops;
	
use KNPLabs\Real\Dinosaur\Tyrannosaurus;
	
 
	
class FakeDinosaursProvider implements DinosaursProvider
	
{
	
    /**
	
     * @var array<Dinosaur>
	
     */
	
    private array $dinosaurs;
	
 
	
    public function __construct()
	
    {
	
        $faker = Factory::create();
	
        $faker->seed(23);
	
 
	
        $this->dinosaurs = [];
	
 
	
        for ($i = 0; $i < 5; $i++) {
	
            $this->dinosaurs[] = new Tyrannosaurus(
	
                $faker->firstName,
	
                $faker->randomElement([Dinosaur::GENDER_MALE, Dinosaur::GENDER_FEMALE]),
	
                $faker->numberBetween(0, 100)
	
            );
	
        }
	
 
	
        for ($i = 0; $i < 5; $i++) {
	
            $this->dinosaurs[] = new Pterodactyl(
	
                $faker->firstName,
	
                $faker->randomElement([Dinosaur::GENDER_MALE, Dinosaur::GENDER_FEMALE]),
	
                $faker->numberBetween(0, 100)
	
            );
	
        }
	
 
	
        for ($i = 0; $i < 5; $i++) {
	
            $this->dinosaurs[] = new Triceratops(
	
                $faker->firstName,
	
                $faker->randomElement([Dinosaur::GENDER_MALE, Dinosaur::GENDER_FEMALE]),
	
                $faker->numberBetween(0, 100)
	
            );
	
        }
	
 
	
        shuffle($this->dinosaurs);
	
    }
	
 
	
    /**
	
     * {@inheritDoc}
	
     */
	
    public function all(): array
	
    {
	
        return $this->dinosaurs;
	
    }
	
}