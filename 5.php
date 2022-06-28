<?php
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

    public function getMonth()
    {
        return $this->month;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setMonth($newMonth)
    {
        if ($newMonth > 12 || $newMonth < 1) {
            return "invalid value";
        }
        return $this->month = $newMonth;
    }
    public function setDay($newDay)
    {
        if ($newDay > 31 || $newDay < 1) {
            return "invalid value";
        }
        return $this->day = $newDay;
    }
}


$date = new Date(14, 12, 1978);
//$date->setMonth(14);
var_dump($date);