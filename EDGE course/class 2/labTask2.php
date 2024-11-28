<!-- fibonacci -->
<!DOCTYPE html>
<html>

<head>
    <title>Fibonacci </title>
</head>

<body>
    <form action="labTask2.php" method="post">
        <label for="fib">Enter a number:</label>
        <input type="number" id="fib" name="fib" required>
        <button type="submit">Submit</button>
    </form>
</body>

</html>


<?php

// n=7 -> 0, 1, 1, 2, 3, 5,8

function fibonacci($n)
{
    if ($n < 1) {
        return 0;
    } elseif ($n == 1) {
        return $n;
    }
    return (fibonacci($n - 1) + fibonacci($n - 2));

}
// echo fibonacci(4);

function displayFibs($n)
{
    echo "Fibonacci numbers are: ";
    for ($i = 0; $i <= $n; $i++) {
        echo fibonacci($i) . " ";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the marks from user input
    $num = $_POST['fib'];

    // Validate the input
    if (!is_numeric($num) || $num < 0) {
        echo "Please enter a valid number ";
    } else {
        displayFibs($num);
        echo "<br>Fibonacci number at index $num: " . fibonacci($num);
    }

}


?>