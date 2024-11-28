<?php

// abs value
echo "abs(): <br>";
echo abs(-10) . "<br>";
echo abs(5.5) . "<br>";
print ("<br>");

// ceiling
echo "ceil(): <br>";
echo ceil(4.7) . "<br>";
echo ceil(-4.7) . "<br>";
print ("<br>");

// floor
echo "floor(): <br>";
echo floor(4.7) . "<br>";
echo floor(-4.7) . "<br>";
print ("<br>");

//rounding
echo "round(): <br>";
echo round(4.7) . "<br>";
echo round(-4.4) . "<br>";
echo round(4.567, 2) . "<br>";
print ("<br>");

//power
echo "pow(): <br>";
echo pow(2, 3) . "<br>";
echo pow(5, 2) . "<br>";
print ("<br>");

// square root
echo "sqrt(): <br>";
echo sqrt(16) . "<br>";
echo sqrt(20) . "<br>";
print ("<br>");

// maximum value
echo "max(): <br>";
echo max(16, 2, 14, 17, 11) . "<br>";
echo max([20, 8, 9, 10, 13, 20]) . "<br>";
print ("<br>");

// minimum value
echo "min(): <br>";
echo min(16, 2, 14, 17, 11) . "<br>";
echo min([20, 8, 9, 10, 13, 20]) . "<br>";
print ("<br>");

// random variable
echo "rand(): <br>";
echo rand() . "<br>";
echo rand(10, 50) . "<br>";
print ("<br>");

// better random numbers
echo "mt_rand(): <br>";
echo mt_rand() . "<br>";
echo mt_rand(10, 50) . "<br>";
print ("<br>");

// value of pi
echo "pi(): <br>";
echo pi() . "<br>";
echo pi() * pow(5, 2) . "<br>";
print ("<br>");

// degree to radians and vice versa
echo "deg2rad() & rad2deg: <br>";
echo deg2rad(180) . "<br>";
echo rad2deg(pi()) . "<br>";
print ("<br>");

// trigonometric function
echo "trigonmatric functions sin(), cos(), tan() : <br>";
echo sin(deg2rad(30)) . "<br>";
echo cos(deg2rad(30)) . "<br>";
echo tan(deg2rad(30)) . "<br>";
print ("<br>");

// logarithmic function
echo "logarithmic function log(), log10() : <br>";
echo log(2.7183) . "<br>";
echo log10(100) . "<br>";
print ("<br>");

// number formatting
echo "number formatting  : <br>";
echo number_format(1234567.8912, 2) . "<br>";
echo log10(100) . "<br>";
print ("<br>");

// example application
$radius = 7;
$area = pi() * pow($radius, 2);
$circumference = 2 * pi() * $radius;
echo "<br>" . "Example application - Circle calculation";
echo "<br>" . "Area: " . number_format($area, 2);
echo "<br>" . "Circumference: " . number_format($circumference, 2);






?>