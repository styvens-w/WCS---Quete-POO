<?php

namespace App;

class Arachnide extends Arthropode
{
    // PROPERTIES
    private int $pawNumber = 8;

    // CONSTRUCT
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}