<?php

namespace App;

final class Snake extends Reptile
{
    // PROPERTIES
    private int $pawNumber = 0;
    protected bool $carnivorous = true;

    // CONSTRUCT
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}