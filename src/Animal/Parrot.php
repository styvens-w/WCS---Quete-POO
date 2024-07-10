<?php

namespace App\Animal;

use App\Flyable;

class Parrot extends Bird implements Flyable
{

    public function fly(): string
    {
        return 'Je vole en battant des ailes';
    }
}