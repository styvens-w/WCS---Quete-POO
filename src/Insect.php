<?php

namespace App;

class Insect extends Arthropode
{
    // PROPERTIES
    private int $pawNumber = 6;

    // CONSTRUCT
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}