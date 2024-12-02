<?php

class city
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

    public function display()
    {
        return "city: " . $this->name . " has a total of " . $this->population . " population <br>";
    }
}

class historicalCity extends city
{
    public $historicalImportance;

    public function __construct($name, $population, $historicalImportance)
    {
        parent::__construct($name, $population);
        $this->historicalImportance = $historicalImportance;
    }

    public function displayFullDetails()
    {
        return $this->display() . "Historical importance: " . $this->historicalImportance;
    }


}

$rajshahi = new historicalCity("Rajshahi", 100000, "Known for its mangoes");

echo $rajshahi->displayFullDetails();

?>