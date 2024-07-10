<?php

namespace App\Animal;

use App\Swimmable;

class Mammal extends Animal implements Swimmable
{
    private $pawNumber = 4;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }

    #[\Override] public function speak(string $lang = 'fr'): string
    {
        parent::speak($lang);
        if ($lang === 'fr') {
            $message = 'Bienvenue humain, moi aussi je suis un mammifère et mon nom est ';
        } else {
            $message = 'Welcome human, I\'am a mammal too and my name is  ';
        }

        return $message . $this->name;
    }

    public function swim(): string
    {
        return 'Je nage grâce à mes poumons et en remuant les pates';
    }
}
