<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $categories = $_POST['categories'];


    // Prepare and execute the update query
    $query = "UPDATE cruding SET name = :name, phone = :phone, email = :email, categories = :categories WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':categories', $categories);
    $stmt->execute();

    // Redirect after updating
    header("Location: index.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM cruding WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $record = $stmt->fetch();

    if (!$record) {
        echo "Record not found!";
        exit();
    }
} else {
    echo "ID not specified!";
    exit();
}

?>

<!-- Update form -->
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $record['name']; ?>" required><br>
    <label>Phone:</label><br>
    <input type="text" name="phone" value="<?php echo $record['phone']; ?>" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $record['email']; ?>" required><br>
    <label>Categories:</label><br>
    <select type='categories' name='categories' required>
        <option value='Education'>Education</option>
        <option value='Health'>Health</option>
        <option value='Technology'>Technology</option>
    </select><br>
    <input type="submit" value="Update">
</form>