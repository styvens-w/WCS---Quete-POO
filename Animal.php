<?php

namespace App\Animal;

use App\Food;

abstract class Animal
{
    public const CENTIMETER = 'cm';
    public const METER = 'm';
    public const CENTIMETER_IN_METER = 100;
    public const GENDERS = ['F' => 'Female', 'M' => 'Male'];

    protected int $pawNumber = 0;
    protected int $size = 100;
    protected string $name = '';
    protected bool $carnivorous = false;
    protected string $gender = 'M';
    protected ?int $age = null;
    protected int $nutrition = 0;

    public function __construct(int $pawNumber, int $size, string $name, bool $carnivorous = false)
    {
        $this->pawNumber = $pawNumber;
        $this->setSize($size);
        $this->name = $name;
        $this->carnivorous = $carnivorous;
    }

    abstract public function feed(Food $food): void;

    public function setGender(string $gender): void
    {
        if (array_key_exists($gender, self::GENDERS)) {
            $this->gender = $gender;
        }
    }

    public function isDangerous(): bool
    {
        return $this->isCarnivorous() && $this->size > 100;
    }

    public function isCarnivorous(): bool
    {
        return $this->carnivorous;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getUnitSize(): string
    {
        $unit = self::CENTIMETER;
        $size = $this->getSize();

        if ($size >= self::CENTIMETER_IN_METER) {
            $unit = self::METER;
            $size /= self::CENTIMETER_IN_METER;
        }

        return $size . $unit;
    }

    public function setSize(float $size): void
    {
        if ($size < 0) {
            $size = 0;
        }

        $this->size = $size;
    }

    /**
     * Get the value of name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of pawNumber
     * @return int
     */
    public function getPawNumber(): int
    {
        return $this->pawNumber;
    }

    public function sayHello() 
    {
        return 'Hello, I am a ' . $this->getName();
    }


    /**
     * Get the value of age
     * @return int
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     * @param int $age 
     * @return self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Get the value of nutrition
     * @return int
     */
    public function getNutrition(): int
    {
        return $this->nutrition;
    }

    /**
     * Set the value of nutrition
     * @param int $nutrition 
     * @return self
     */
    public function setNutrition(int $nutrition): self
    {
        $this->nutrition = $nutrition;
        return $this;
    }
}
