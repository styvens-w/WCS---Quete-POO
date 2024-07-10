<?php

namespace App\Animal;

use App\Swimmable;

class Penguin extends Bird implements Swimmable
{
    public function swim(): string
    {
        return 'Je nage grâce à mes ailes en les utilisant comme des nageoires';
    }
}