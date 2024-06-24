<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Area.php';
require __DIR__ . '/../src/Mammal.php';
require __DIR__ . '/../src/Feline.php';
require __DIR__ . '/../src/Equid.php';
require __DIR__ . '/../src/Bird.php';
require __DIR__ . '/../src/Reptile.php';
require __DIR__ . '/../src/Crocodilian.php';
require __DIR__ . '/../src/Snake.php';
require __DIR__ . '/../src/Arthropode.php';
require __DIR__ . '/../src/Arachnide.php';
require __DIR__ . '/../src/Spider.php';
require __DIR__ . '/../src/Insect.php';

use App\Area;
use App\Mammal;
use App\Feline;
use App\Equid;
use App\Bird;
use App\Crocodilian;
use App\Snake;
use App\Arachnide;
use App\Spider;
use App\Insect;

$elephant = new Mammal('Elephant');
$elephant->setThreatenedLevel('LC');

$lion = new Feline('Lion');
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$tiger = new Feline('Tiger');
$tiger->setSize(70);
$tiger->setThreatenedLevel('EN');

$zebra = new Equid('Zebra');
$zebra->setSize(75);
$zebra->setThreatenedLevel('EN');

$parrot = new Bird('parrot', 2);
$parrot->setSize(30);

$alligator = new Crocodilian('Alligator');
$alligator->setSize(55);
$alligator->setThreatenedLevel('LC');

$python = new Snake('Python');
$python->setSize(50);
$python->setThreatenedLevel('LC');

$scorpio = new Arachnide('Scorpio');
$scorpio->setSize(25);
$scorpio->setThreatenedLevel('CR');

$tarantula = new Spider('Tarantula');
$tarantula->setSize(25);
$tarantula->setThreatenedLevel('LC');

$bee = new Insect('Bee');
$bee->setSize(7);


$animals = [$elephant, $lion, $tiger, $zebra, $parrot, $alligator, $python, $scorpio, $tarantula, $bee];

$savana = new Area('savana');
$savana->addAnimal($lion);
$savana->addAnimal($elephant);
$jungle = new Area('jungle');
$jungle->addAnimal($parrot);

$areas = [$savana, $jungle];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';