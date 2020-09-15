<?php

namespace KNPLabs\Real;

abstract class Dinosaur 

{

    private  $name;
    private  $gender;
    private  $age;

    public const GENDER_MALE = 'Male';
    public const GENDER_FEMALE = 'Female';
    private const ADULT_AGE = 21;


    

    public function __construct(string $name, string $gender,int $age) {

        if (($gender!==self::GENDER_MALE) && ($gender!==self::GENDER_FEMALE)) {
            throw new \InvalidArgumentException('Genre non valide');
        }


    	$this->name = $name;
        $this->age = $age;
        $this->gender = $gender;


    }


    public function getName(): string {
    	return $this->name;
    }

    
    public function isAdult(): bool {
    	return $this->age > self::ADULT_AGE;
    }

    public function isMale(): bool {
        return $this->gender === self::GENDER_MALE;
    }

    public function isFemale(): bool {
    	return $this->gender === self::GENDER_FEMALE;
    }

    public abstract function roar(): string ;

    public abstract function getRace(): string ;


}
