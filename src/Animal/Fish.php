<?php

namespace App\Animal;

use App\Swimmable;

class Fish extends Animal implements Swimmable
{
    private int $pawNumber = 0;
    
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }

    public function swim(): string
    {
        return 'Je nage grâce à mes nageoires et je respire sous l\'eau';
    }
}