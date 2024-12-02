<?php

class car
{
    public $brand;
    public $color;

    // method to set car properties
    public function setDetails($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // method to get car details
    public function display()
    {
        return "This car is a " . $this->brand . " " . $this->color . ".";
    }
}

// create an object of the class
$car1 = new car();
$car1->setDetails("Toyota", "blue");

// display the car details
echo $car1->display();
echo "<br>" . $car1->brand;



?>