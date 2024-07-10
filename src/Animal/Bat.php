<?php

namespace App\Animal;

use App\Flyable;

class Bat extends Mammal implements Flyable
{
    public function fly(): string
    {
        return 'Je vole grâce à mes ailes';
    }
}