<?php

//using for loop:
for ($i = 0; $i < 10; $i++) {
    echo "The square of $i is: " . ($i * $i) . "<br>";
}
echo "<br>";

//using while loop
$i = 1;
while ($i < 10) {
    echo "The square of $i is: " . ($i * $i) . "<br>";
    $i++;
}
echo "<br>";

//using do while
$i = 1;
do {
    echo "The square of $i is: " . ($i * $i) . "<br>";
    $i++;
} while ($i < 10);
echo "<br>";

//for-each
$numbers = array(1, 3, 4, 6, 2, 7);
echo "Using for-each loop on array(1, 3, 4, 6, 2, 7): ";
foreach ($numbers as $i) {
    echo "The square of $i is: " . ($i * $i) . "<br>";
}
echo "<br>";

//break statement
for ($i = 1; $i < 10; $i++) {
    if ($i == 6) {
        echo "Breaking the loop at: " . $i . "<br>";
        break;
    }
    echo "Number is $i <br>";
}
echo "<br>";

//continue statement
for ($i = 1; $i < 10; $i++) {
    if ($i == 6) {
        echo "continue the loop at: " . $i . "<br>";
        continue;
    }
    echo "Number is $i <br>";
}
echo "<br>";


?>