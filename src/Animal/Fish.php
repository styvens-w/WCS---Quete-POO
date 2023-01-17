<?php

namespace App\Animal;

class Fish extends Animal
{
    private int $pawNumber = 0;
    
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}