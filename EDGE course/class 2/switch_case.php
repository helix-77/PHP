<?php

$day = date("l"); // gets the current day of the week
$date = date("d");
echo $date . "<br>";
$today = date("Y-m-d H:i:s");
echo $today . "<br>";


switch ($day) {
    case "Monday":
        echo "It's $day, Start of the week";
        break;
    case "Tuesday":
        echo "It's $day, Keep up the momentum";
        break;
    case "Wednesday":
        echo "It's $day, Midweek already !";
        break;
    case "Thursday":
        echo "It's $day, Almost there";
        break;
    case "Friday":
        echo "It's $day, happy Friday. Weekend is near.";
        break;
    case "Saturday":
        echo "It's $day, It's weekend. Time to relax";
        break;
    default:
        echo "It's $day, the funday. Time to have some fun";
        break;

}

?>