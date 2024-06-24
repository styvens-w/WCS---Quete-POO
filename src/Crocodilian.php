<?php

namespace App;

final class Crocodilian extends Reptile
{
    // PROPERTIES
    private int $pawNumber = 4;
    protected bool $carnivorous = true;

    // CONSTRUCT
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}