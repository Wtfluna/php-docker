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

class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;

    public function __construct(string $color, float $price, string $temperature = "cold", string $name, float $alcoholPercentage)

    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
}

$duvel = new Beer("blond", 3.5, "cold", "Duvel", 8.5);

echo "Alcohol percentage: " . $duvel->getAlcoholPercentage() . "<br>";

echo "Alcohol percentage: " . $duvel->alcoholPercentage . "<br>";

echo "Color: " . $duvel->color . "<br>";

echo $duvel->getInfo() . "<br>";

echo "<a href=\"index.php\">Back to menu</a>";
