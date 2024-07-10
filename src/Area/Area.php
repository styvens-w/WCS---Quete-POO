<?php

namespace App\Area;

use App\Animal\Animal;

abstract class Area
{
    private string $name;
    private array $animals = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAnimals(): array
    {
        return $this->animals;
    }

    public function addAnimal(Animal $animal): void
    {
        if (!$this->isValid($animal)) {
            throw new \Exception('impossible d\'ajouter le ' . $animal->getName() . ' au ' . $this->getName());
        }

        $this->animals[] = $animal;

    }

    abstract public function isValid(Animal $animal): bool;
}
