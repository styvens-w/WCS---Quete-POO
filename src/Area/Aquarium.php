<?php

namespace App\Area;

use App\Swimmable;

class Aquarium extends Area
{
    protected function isValid($animal) 
    {
        return $animal instanceof Swimmable;
    }
}