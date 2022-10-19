<?php

namespace App;

class Insect extends Arthropode
{
    private int $pawNumber = 6;
    
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}