<?php

class River
{
    public $name;
    public function setName($riverName)
    {
        $this->name = $riverName;
    }

    public function getName()
    {
        return "The river is: " . $this->name;
    }

}

// define a derived class that inherits RIver class
class FamousRiver extends River
{
    public function describe()
    {
        return $this->name . "is the most important river in bangladesh.";

    }
}

// create obj using derived class
$river1 = new FamousRiver();
// set the name using parent class method
$river1->setName("Padma");
// get the name using parent class method
echo $river1->getName() . "<br>";

echo $river1->describe();




?>