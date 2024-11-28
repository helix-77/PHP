<?php

//generating primes
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// echo "Is 2 prime? Ans: " . isPrime(2) . "<br>";

function generatePrimeNumbers($start, $end)
{
    $prime = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $prime[] = $i; // adds prime number into the array
        }
    }
    return $prime;
}

// display prime between 1 & 1000
$primeNumbers = generatePrimeNumbers(1, 1000);
echo "Prime numbers between (1-1000) : <br>";
echo implode(", ", $primeNumbers);
echo "<br>";


?>