<?php

namespace App\Animal;

use App\Swimmable;

final class Snake extends Reptile implements Swimmable
{
    private int $pawNumber = 0;
    protected bool $carnivorous = true;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }

    public function swim(): string
    {
        return 'Je nage grâce à l\'ondulation latérale';
    }
}