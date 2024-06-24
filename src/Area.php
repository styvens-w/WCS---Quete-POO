<?php

namespace App;

class Area
{
   // PROPERTIES
    private string $name;
    private array $animals=[];


    // CONSTRUCT
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    // METHODS
    // Getters
    public function getName(): string
    {
        return $this->name;
    }

    public function getAnimals(): array
    {
        return $this->animals;
    }

    // Others
    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }
}