<?php

namespace App;

class Bird extends Animal
{
    private int $pawNumber = 2;
    
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}