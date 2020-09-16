<?php

namespace KNPLabs\Real\FileProvider;

use Exception;
use InvalidArgumentException;
use KNPLabs\Real\DinosaurFactory;
use KNPLabs\Real\Provider\DinosaursProvider;

class FileDinosaursProvider implements DinosaursProvider
{
    private $storageFilePath;

    public function __construct(string $storageFilePath)
    {
        $this->storageFilePath = $storageFilePath;
    }

    public function all(): array
    {
        try {
            $rawDinosaurs = file_get_contents($this->storageFilePath);
            $rawDinosaurs = json_decode($rawDinosaurs, true);
        } catch (Exception $e) {
            return [];
        }

        $dinosaurs = [];

        foreach ($rawDinosaurs as $rawDinosaur) {
            try {
                $dinosaurs[] = DinosaurFactory::create(
                    $rawDinosaur['race'],
                    $rawDinosaur['name'],
                    $rawDinosaur['gender'],
                    $rawDinosaur['age']
                );
            } catch (InvalidArgumentException $e) {
                continue;
            }
        }

        return $dinosaurs;
    }

    public function searchByName(string $name): array
    {
        return array_filter($this->all(), function ($dinosaur) use ($name) {
            return 1 === preg_match('/'. $name . '/', $dinosaur->getName());
        });
    }
}
