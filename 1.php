<?php
//DONE
//Create a class Product that represents a product sold in a shop. A product has a price, amount and name.
//The class should have:
//A constructor Product(string name, float startPrice, int amount)
//A function printProduct() that prints a product in the following form:
//Banana, price 1.1, amount 13
//Test your code by creating a class with main method and add three products there:
//"Logitech mouse", 70.00 EUR, 14 units
//"iPhone 5s", 999.99 EUR, 3 units
//"Epson EB-U05", 440.46 EUR, 1 units
//Print out information about them.
//Add new behaviour to the Product class:
//possibility to change quantity
//possibility to change price
//Reflect your changes in a working application.
class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProduct(): string
    {

        return "$this->name, price " . number_format($this->price, 2) . " EUR, amount $this->amount units" . PHP_EOL;
    }

}

$product = new Product("banana", 1.10, 13);
echo $product->printProduct();
$mouse = new Product("Logitech mouse", 70.00, 14);
$iPhone = new Product("iPhone 5s", 999.99, 3);
$epson = new Product("Epson EB-U05", 440.46, 1);
echo $mouse->printProduct();
echo $iPhone->printProduct();
echo $epson->printProduct();
