<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Selector</title>
</head>

<body>
    <h1>Choose Your Car</h1>
    <form action="project1.php" method="post">
        <label for="brand">Choose Brand:</label>
        <input type="text" id="brand" name="brand" placeholder="Enter brand name" required>
        <br><br>
        <label for="model">Choose Model:</label>
        <input type="text" id="model" name="model" placeholder="Enter model name" required>
        <br><br>
        <button type="submit">Get Car Details</button>
    </form>
</body>

</html>


<?php

abstract class Car
{
    protected $brand;
    protected $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    abstract public function getDetails();
}

interface Logger
{
    public function log($message);
}

class BMW extends Car
{
    public function getDetails()
    {
        return "Brand: {$this->brand}, Model: {$this->model}. BMW cars are known for its performance and luxury";
    }
}

class Audi extends Car
{
    public function getDetails()
    {
        return "Brand: {$this->brand}, Model: {$this->model}. Audi cars are known for advanced technology and elegance.";

    }
}


class Toyota extends Car
{
    public function getDetails()
    {
        return "Brand: {$this->brand}, Model: {$this->model}. Toyota cars are known for giving better durability and value for money";
    }
}


class CarLogger implements Logger
{
    public function log($message)
    {
        echo "<p>Log: $message</p>";
    }
}

class CarHandler extends CarLogger
{
    public function handle($brand, $model)
    {
        $car = null;
        switch ($brand) {
            case 'bmw':
                $car = new BMW('BMW', $model);
                break;
            case 'audi':
                $car = new Audi('AUDI', $model);
                break;
            case 'toyota':
                $car = new Toyota('TOYOTA', $model);
                break;
            default:
                throw new Exception('Unknown car brand:' . $brand);
        }
        $this->log($car->getDetails());
        // echo "<p>" . $car->getDetails() . "</p>";

    }
}

// form handling
// Handling form input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $brand = $_POST['brand'];
        $model = $_POST['model'];

        $handler = new CarHandler();
        $handler->handle($brand, $model);
    } catch (Exception $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}




?>