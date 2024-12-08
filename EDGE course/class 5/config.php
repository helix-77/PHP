<?php
$host = "localhost";
$dbname = "crud";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>