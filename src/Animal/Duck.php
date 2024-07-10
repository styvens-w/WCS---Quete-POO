<?php

namespace App\Animal;

use App\Flyable;
use App\Swimmable;

class Duck extends Bird implements Flyable, Swimmable
{
    public function fly(): string
    {
        return 'Je vole grâce à mes ailes';
    }

    public function swim(): string
    {
        return 'Je nage grâce aux palmures entre mes doigts';
    }
}