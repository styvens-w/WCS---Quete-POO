<?php

namespace App;

class Bird extends Animal
{
    // PROPERTIES
    private int $pawNumber = 2;

    // CONSTRUCT
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}