<?php

namespace App\Animal;

use App\Swimmable;

class Fish extends Animal implements Swimmable
{
    public function swim()
    {
        return 'I can swim and breath under water';
    }
}