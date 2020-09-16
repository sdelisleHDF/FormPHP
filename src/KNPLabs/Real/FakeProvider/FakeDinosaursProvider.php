<?php

namespace KNPLabs\Real\FakeProvider;

use Faker\Factory;
use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\Provider\DinosaursProvider;
use KNPLabs\Real\Dinosaur\Pterodactyl;
use KNPLabs\Real\Dinosaur\Triceratops;
use KNPLabs\Real\Dinosaur\Tyrannosaurus;

class FakeDinosaursProvider implements DinosaursProvider
{
    private $dinosaurs;

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

    public function all(): array
    {
        return $this->dinosaurs;
    }

    public function searchByName(string $ch): array
    {
        
        return array_filter($this->dinosaurs, function ($dinosaur) use ($ch) {

            return 1 === preg_match('/(?i)'. $ch . '/', $dinosaur->getName());

        });
    }
}
