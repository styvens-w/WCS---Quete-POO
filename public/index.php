<?php

require '../vendor/autoload.php';

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

use App\Animal\Bat;
use App\Animal\Duck;
use App\Animal\Ostrich;
use App\Animal\Parrot;
use App\Animal\Penguin;
use App\Animal\Pterygota;
use App\Area\Desert;
use App\Area\Jungle;
use App\Animal\Equid;
use App\Animal\Felid;
use App\Animal\Snake;
use App\Animal\Mammal;
use App\Animal\Spider;
use App\Area\Aquarium;
use App\Animal\Arachnide;
use App\Animal\Fish;

$elephant = new Mammal('elephant');
try {
    $elephant->setThreatenedLevel('LC');
} catch (UnexpectedValueException $exception) {
    $errors[]  = $exception->getMessage();
} catch (RuntimeException $exception) {
    $smallErrors[]  = $exception->getMessage();
}

$elephant->setSize(400);

$lion = new Felid('lion');
try {
    $lion->setSize(100);
} catch (RangeException $exception) {
    $smallErrors[]  = $exception->getMessage();
} catch (Exception $exception) {
    $errors[]  = $exception->getMessage();
}

$lion->setThreatenedLevel('VU');

$tiger = new Felid('tiger');
$tiger->setSize(150);
$tiger->setThreatenedLevel('EN');

$zebra = new Equid('zebra');
$zebra->setSize(120);
$zebra->setThreatenedLevel('EN');

$parrot = new Parrot('parrot');
$parrot->setSize(30);

$shark = new Fish('shark');
$shark->setSize(180);

$python = new Snake('python');
$python->setSize(300);

$tarentula = new Spider('tarentula');
$tarentula->setSize(10);

$scorpio = new Arachnide('scorpio');
$scorpio->setSize(15);
$scorpio->setCarnivorous(true);

$bee = new Pterygota('bee');
$bee->setSize(2);

$penguin = new Penguin('penguin');
$penguin->setSize(60);

$ostrich = new Ostrich('ostrich');
$ostrich->setSize(70);

$duck = new Duck('duck');
$duck->setSize(50);

$bat = new Bat('bat');
$bat->setSize(38);

$animals = [$elephant, $lion, $tiger, $zebra, $parrot, $shark, $python, $scorpio, $tarentula, $bee, $penguin, $ostrich, $duck, $bat];

try {
    $jungle = new Jungle('jungle');
    $jungle->addAnimal($parrot);
    $jungle->addAnimal($tarentula);
    $jungle->addAnimal($tiger);

    $desert = new Desert('desert');
    $desert->addAnimal($scorpio);

    $aquarium = new Aquarium('aquarium');
    $aquarium->addAnimal($shark);

    $areas = [$aquarium, $jungle, $desert];
} catch (Exception $exception) {
    $errors[] = $exception->getMessage();
}

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
