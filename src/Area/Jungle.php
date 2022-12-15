<?php

namespace App\Area;

use App\Animal\Animal;
use Exception;

class Jungle extends Area
{
    protected function isValid($animal) 
    {
        return true;
    }
}