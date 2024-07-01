<?php

require '../vendor/autoload.php';

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

use App\Area;
use App\Arachnide;
use App\Bird;
use App\Crocodilian;
use App\Equid;
use App\Felid;
use App\Insect;
use App\Mammal;
use App\Snake;
use App\Spider;

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
$lion->setSize(100);
$lion->setThreatenedLevel('VU');

$tiger = new Felid('tiger');
$tiger->setSize(150);
$tiger->setThreatenedLevel('EN');

$zebra = new Equid('zebra');
$zebra->setSize(120);
$zebra->setThreatenedLevel('EN');

$parrot = new Bird('parrot');
$parrot->setSize(30);

$alligator = new Crocodilian('alligator');
$alligator->setSize(180);

$python = new Snake('python');
$python->setSize(300);

$tarentula = new Spider('tarentula');
$tarentula->setSize(10);

$scorpio = new Arachnide('scorpio');
$scorpio->setSize(15);
$scorpio->setCarnivorous(true);

$bee = new Insect('bee');
$bee->setSize(2);

$animals = [$elephant, $lion, $tiger, $zebra, $parrot, $alligator, $python, $scorpio, $tarentula, $bee];

$savana = new Area('savana');
$savana->addAnimal($lion);
$savana->addAnimal($elephant);
$savana->addAnimal($zebra);

$jungle = new Area('jungle');
$jungle->addAnimal($parrot);
$jungle->addAnimal($alligator);
$jungle->addAnimal($tarentula);
$jungle->addAnimal($tiger);

$desert = new Area('desert');
$desert->addAnimal($scorpio);

$areas = [$savana, $jungle, $desert];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
