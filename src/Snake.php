<?php

namespace App;

final class Snake extends Reptile
{
    private int $pawNumber = 0;
    protected bool $carnivorous = true;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}