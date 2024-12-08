<?php

include 'config.php';
$query = "select * from cruding";
$stmt = $conn->prepare($query);
$stmt->execute();
$records = $stmt->fetchAll();

echo "<a href='create.php'>Add New Record</a>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>";

foreach ($records as $record) {
    echo "<tr>
        <td>" . $record["id"] . "</td>
        <td>" . $record["name"] . "</td>
        <td>" . $record["email"] . "</td>
        <td>
            <a href='update.php?id=" . $record["id"] . "'>Edit</a>
            <a href='delete.php?id=" . $record["id"] . "'>Delete</a>
        </td>
    </tr>";
}
echo "</table>";
?>