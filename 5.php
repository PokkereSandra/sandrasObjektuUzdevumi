<?php
//DONE
//Create a class called Date that includes: three pieces of information as instance variables — a month,
// a day and a year.
//Your class should have a constructor that initializes the three instance variables and assumes that
// the values provided are correct. Provide a set and a get for each instance variable.
//Provide a method DisplayDate that displays the month, day and year separated by forward slashes /.
//Write a test application named DateTest that demonstrates class Date capabilities.
class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct($month, $day, $year)
    {
        if ($month > 0 && $month < 13) {
            $this->month = $month;
        }
        if ($day > 0 && $day < 32) {
            $this->day = $day;
        }
        $this->year = $year;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setMonth(int $newMonth): void
    {
        $this->month = $newMonth;
    }

    public function setDay(int $newDay): void
    {
        $this->day = $newDay;
    }

    public function setYear(int $newYear): void
    {
        $this->year = $newYear;
    }

    public function displayDate(int $month, int $day, int $year): string
    {
        if ($day > 31 || $day < 1) {
            return "invalid value of day" . PHP_EOL;
        }
        else if ($month > 12 || $month < 1) {
            return "invalid value of month";
        }
        return "{$this->getMonth()}/{$this->getDay()}/{$this->getYear()}";
    }
}

$date = new Date(11, 12, 1978);
$month = (int)readline("enter month: ");
$day = (int)readline("enter day: ");
$year = (int)readline("enter year: ");
function dateTest(int $month, int $day, int $year): string
{
    $newDate = new Date($month, $day, $year);
    $newDate->setMonth($month);
    $newDate->setDay($day);
    $newDate->setYear($year);
    return $newDate->displayDate($month, $day, $year);
}

echo dateTest($month, $day, $year);