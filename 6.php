<?php
//DONE
//See energy-drinks.php
//A soft drink company recently surveyed 12,467 of its customers and found that approximately 14
// percent of those surveyed purchase one or more energy drinks per week. Of those customers who purchase
// energy drinks, approximately 64 percent of them prefer citrus flavored energy drinks.
//Write a program that displays the following:
//The approximate number of customers in the survey who purchased one or more energy drinks per week
//The approximate number of customers in the survey who prefer citrus flavored energy drinks
class Survey
{
    public int $surveyed;
    public float $pplWhoDrinkEnergyDrinks;
    public float $pplWhoPreferCitrus;

    public function __construct(int $surveyed, float $pplWhoDrinkEnergyDrinks, float $pplWhoPreferCitrus)
    {
        $this->surveyed = $surveyed;
        $this->pplWhoDrinkEnergyDrinks = $pplWhoDrinkEnergyDrinks;
        $this->pplWhoPreferCitrus = $pplWhoPreferCitrus;
    }

    public function getEnergyDrinkers(): int
    {
        return $this->pplWhoDrinkEnergyDrinks * $this->surveyed;
    }

    public function getCitrusDrinkers(): int
    {
        return $this->pplWhoDrinkEnergyDrinks * $this->surveyed * $this->pplWhoPreferCitrus;
    }
}

$energyDrinkSurvey = new Survey(12467, 0.14, 0.64);

echo "Total number of people surveyed " . $energyDrinkSurvey->surveyed . PHP_EOL;
echo "Approximately " . $energyDrinkSurvey->getEnergyDrinkers() . " bought at least one energy drink" . PHP_EOL;
echo $energyDrinkSurvey->getCitrusDrinkers() . " of those " . $energyDrinkSurvey->getEnergyDrinkers() . " prefer citrus flavored energy drinks.";