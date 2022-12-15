<?php

namespace App\Area;

use App\Animal\Animal;
use App\Swimmable;
use Exception;

class Desert extends Area
{
    protected function isValid($animal) 
    {
        return !$animal instanceof Swimmable;
    }
}