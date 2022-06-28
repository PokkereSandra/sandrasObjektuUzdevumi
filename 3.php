<?php
//For this exercise, you will design a set of classes that work together to simulate a car's fuel gauge and odometer.
// The classes you will design are the following:
//The FuelGauge Class: This class will simulate a fuel gauge. Its responsibilities are as follows:
//To know the car’s current amount of fuel, in liters.
//To report the car’s current amount of fuel, in liters.
//To be able to increment the amount of fuel by 1 liter. This simulates putting fuel in the car. ( The car can
// hold a maximum of 70 liters.)
//To be able to decrement the amount of fuel by 1 liter, if the amount of fuel is greater than 0 liters.
// This simulates burning fuel as the car runs.
//The Odometer Class: This class will simulate the car’s odometer. Its responsibilities are as follows:
//To know the car’s current mileage.
//To report the car’s current mileage.
//To be able to increment the current mileage by 1 kilometer. The maximum mileage the odometer can store is
// 999,999 kilometer. When this amount is exceeded, the odometer resets the current mileage to 0.
//To be able to work with a FuelGauge object. It should decrease the FuelGauge object’s current amount of
// fuel by 1 liter for every 10 kilometers traveled. (The car’s fuel economy is 10 kilometers per liter.)
//Demonstrate the classes by creating instances of each. Simulate filling the car up with fuel, and then run
// a loop that increments the odometer until the car runs out of fuel. During each loop iteration, print the
// car’s current mileage and amount of fuel.
class FuelGauge
{
    public int $currentAmountOfFuel;

    public function __construct(int $currentAmountOfFuel)
    {
        $this->currentAmountOfFuel = $currentAmountOfFuel;
    }

    public function getFuel(int $amount): int
    {
        if ($this->currentAmountOfFuel + $amount > 70) {
            return 70;
        }
        return $this->currentAmountOfFuel + $amount;
    }

    public function burnFuel(int $currentAmountOfFuel): int
    {
        if ($this->currentAmountOfFuel > 0) {
            return $currentAmountOfFuel - 1;
        }
        return 0;
    }

    public function economyRun(int $amount): int
    {

    }
}

class Odometer
{
    public int $currentMileage;

    public function __construct($currentMileage)
    {
        $this->currentMileage = $currentMileage;
    }

    public function increaseOfMileage(int $currentMileage): int
    {
        if ($this->currentMileage + 1 <= 999999) {
            return $this->currentMileage + 1;
        }
        return 0;
    }
}

$car = new FuelGauge(30);
echo $car->getFuel(50);
echo $car->burnFuel(70);
