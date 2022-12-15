<?php

namespace App\Animal;

use Swimmable;

class Fish extends Animal implements Swimmable
{
    public function swim(): string
    {
        return 'je nage graçe à mes nageoires';
    }
}