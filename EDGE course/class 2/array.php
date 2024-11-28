<?php

//indexed array
$fruits = ["Apple", "Banana", "Apple", "Orange"];
for ($i = 0; $i < count($fruits); $i++) {
    echo "Fruit at $i is: " . $fruits[$i] . "<br>";
}
echo "<br>";

// Associative array(Named index)
$person = [
    "name" => "John",
    "age" => "30",
    "city" => "Dhaka",
    "Job" => "Software Engineering",
];
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
echo "<br>";

// Multidimensional Array
$employees = [
    ["name" => "AAA", "position" => "Manager", "Salary" => 50000000],
    ["name" => "BBB", "position" => "Trainee", "Salary" => 3500000],
    ["name" => "CCC", "position" => "Senior Developer", "Salary" => 15000000],
];
foreach ($employees as $employee) {
    echo "Name:" . $employee["name"] . " | Position: " . $employee["position"] . " | Salary: " . $employee["Salary"];
    echo '<br>';
}



?>