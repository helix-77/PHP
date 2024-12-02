<!DOCTYPE html>
<html>

<head>
    <title>District Information</title>
</head>

<body>
    <form action="" method="post">
        <h2>Enter District Information</h2>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <label for="district<?php echo $i; ?>">District <?php echo $i; ?> Name:</label>
            <input type="text" id="district<?php echo $i; ?>" name="districts[]" placeholder="Enter district name">

            <label for="population<?php echo $i; ?>">Population:</label>
            <input type="number" id="population<?php echo $i; ?>" name="populations[]" placeholder="Enter population"
                min="0">
        <?php endfor; ?>

        <label for="historical">Historical Importance (Optional):</label>
        <input type="text" id="historical" name="historical_importance" placeholder="Enter historical importance">

        <input type="submit" value="Submit">
    </form>

    <?php
    class City
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
            return "City: " . $this->name . " has a total population of " . number_format($this->population) . " <br>";
        }
    }

    class HistoricalCity extends City
    {
        public $historicalImportance;

        public function __construct($name, $population, $historicalImportance = "No specific historical significance")
        {
            parent::__construct($name, $population);
            $this->historicalImportance = $historicalImportance;
        }

        public function displayFullDetails()
        {
            return $this->display() . "Historical importance: " . $this->historicalImportance . "<br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and process input
        $districts = $_POST['districts'] ?? [];
        $populations = $_POST['populations'] ?? [];
        $historical_importance = $_POST['historical_importance'] ?? '';

        // Arrays to store created city objects
        $cities = [];

        // Validate and create city objects
        for ($i = 0; $i < count($districts); $i++) {
            // Trim and validate district name
            $district = trim($districts[$i]);
            $population = isset($populations[$i]) ? intval($populations[$i]) : 0;

            // Only process if district name is not empty
            if (!empty($district)) {
                // If historical importance is provided, use it for all cities
                $city = $historical_importance
                    ? new HistoricalCity($district, $population, $historical_importance)
                    : new City($district, $population);

                $cities[] = $city;
            }
        }

        // Display city information
        echo "<h2>City Details</h2>";
        foreach ($cities as $city) {
            echo $city instanceof HistoricalCity
                ? $city->displayFullDetails()
                : $city->display();
        }
    }
    ?>
</body>

</html>