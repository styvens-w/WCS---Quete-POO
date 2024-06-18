<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$parrot = new Animal();
$elephant = new Animal();

$lion->name = 'Lion';
$lion->pawNumber = 4;
$lion->carnivorous = true;
$lion->size = 50;
$lion->threatenedLevel = 'VU';

$parrot->name = 'Parrot';
$parrot->pawNumber = 2;
$parrot->size = 20;
$parrot->threatenedLevel = 'NT';

$elephant->name = 'Elephant';
$elephant->pawNumber = 4;
$elephant->size = 70;
$elephant->threatenedLevel = 'EN';

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';