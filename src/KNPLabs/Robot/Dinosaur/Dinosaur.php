<?php // robot dinosaur

class Dinosaur
{
    public function roar(): string
    {
        return 'roar.mp3';
    }

    public function getRace(): string
    {
        return 'Robot dinosaur';
    }

    public function getName(): string
    {
        return 'Robot-A23N';
    }

    public function isAdult(): bool
    {
        return true;
    }

    public function isFemale(): bool
    {
        return false;
    }

    public function isMale(): bool
    {
        return false;
    }
}
