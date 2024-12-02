<?php

class District
{
    private $name;

    public function setName($districtName)
    {
        $this->name = $districtName;
    }

    // method to get the value of private property
    public function getName()
    {
        return $this->name;
    }
}

// new obj
$district1 = new District();
// set the name of the district
$district1->setName("Dhaka");
// get the name of the district
echo "This district is " . $district1->getName() . "<br>";



?>