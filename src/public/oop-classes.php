<?php

declare(strict_types=1);

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }
}


$cola = new Beverage("black", 2.0);

echo $cola->getInfo() . "<br>"; // Output: This beverage is cold and black.

echo "Temperature: " . $cola->getTemperature() . "<br>"; // Output: Temperature: cold

echo "<a href=\"index.php\">Back to menu</a>";
