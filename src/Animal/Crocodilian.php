<?php

namespace App\Animal;

use App\Swimmable;

final class Crocodilian extends Reptile implements Swimmable
{
    private int $pawNumber = 4;
    protected bool $carnivorous = true;
    
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }

    public function swim(): string
    {
        return 'I can swim in rivers';
    }
}