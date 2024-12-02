<?php

class city
{
    public $name;
    public $population;

    // constructor to initialize properties
    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

    // method to display city details
    public function display()
    {
        return "The city of " . $this->name . "has a population of " . $this->population . " people";
    }
}

// create object and pass values all-together
$city1 = new city("Rajshahi", 10000000);

echo $city1->display();




?>