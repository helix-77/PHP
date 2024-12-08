<?php
include "config.php";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];



    $query = "insert into cruding (name, phone, email) values (:name, :phone, :email)";
    $stmt = $connection->prepare($query);

    $stmt->execute();

    header("Location: index.php");
}

echo "
    <form  method='post'>

    
    </form>

"


    ?>