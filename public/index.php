<?php
require '../vendor/autoload.php';

use App\Animal\Animal;
use App\Animal\Lion;
use App\Animal\Parrot;
use App\Animal\Python;
use App\Animal\Snake;

$python = new Python();
$parrot = new Parrot();

// $animal2 = new Animal(2, 50, 'penguin');

// $animal3 = new Animal(8, 10, 'tarantula');

$lion = new Lion();

$animals = [$lion, $python, $parrot];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Wild zoo</title>
</head>

<body>
    <header>
        <h1>Wild Zoo</h1>
    </header>
    <main>
        <div class="animals">
            <?php foreach ($animals as $animal) : ?>
                <article>
                    <div class="hello"><?= $animal->sayHello() ?></div>
                    <div></div>
                    <img class="animal-img" width="<?= $animal->getSize() . '%' ?>" src="<?= 'assets/images/animals/' . $animal->getName() . '.png' ?>" alt="<?= $animal->getName() ?>">
                    <div class="notice">
                        <div class="title">
                            <h1>
                                <?= $animal->getName() ?>
                            </h1>
                            <div class="<?= $animal->isCarnivorous() ? 'carnivorous' : 'vegetarian' ?>"></div>
                        </div>
                        <hr />
                        <ul class="infos">
                            <li class="paw"><?= $animal->getPawNumber() . ' patte(s)' ?></li>
                            <li class="size"><?= $animal->getUnitSize() ?></li>
                            <li class="<?= $animal->isCarnivorous() ? 'carnivorous' : 'vegetarian' ?>"><?= $animal->isCarnivorous() ? 'carnivorous' : 'vegetarian' ?></li>
                            <li class="<?= $animal->isDangerous() ? 'dangerous' : 'not-dangerous' ?>"><?= $animal->isCarnivorous() ? 'dangerous' : 'innofensive' ?></li>
                        </ul>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
    <a class="folded-map" href="/area.php">
        <img src="assets/images/folded_map.png" alt="map">
    </a>
</body>

</html>