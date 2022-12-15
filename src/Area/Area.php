<?php

namespace App\Area;

use App\Animal\Animal;
use Exception;

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

    public function addAnimal(Animal $animal)
    {
        if (!$this->isValid($animal)) {
            throw new Exception('impossible d\'ajouter cet animal');
        }
        
        $this->animals[] = $animal;
        
    }

    abstract protected function isValid($animal);
}