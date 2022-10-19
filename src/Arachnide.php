<?php

namespace App;

class Arachnide extends Arthropode
{
    private int $pawNumber = 8;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}