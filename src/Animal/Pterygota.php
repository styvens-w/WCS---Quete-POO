<?php

namespace App\Animal;

use App\Flyable;

class Pterygota extends Insect implements Flyable
{
    public function fly(): string
    {
        return 'Je vole grâce à mes ailes';
    }
}