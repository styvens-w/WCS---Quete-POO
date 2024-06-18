<?php

class Animal
{
    // PROPERTIES
    public string $name;
    public float $size = 100;
    public bool $carnivorous = false;
    public int $pawNumber;
    public string $threatenedLevel = 'NE';

    // METHODS
    public function speak(string $lang = 'fr'): string
    {
        if($lang === 'fr') {
            $message = 'Bienvenue au zoo, je suis un ';
        } else {
            $message = 'Welcome to the zoo, I am a ';
        }

        return $message . $this->name;
    }

    public function isDangerous(): bool
    {
        return match (true) {
            $this->size > 50 && $this->carnivorous => true,
            default => false,
        };
    }
}
