<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (NIC, Name, Address, Tel, Course) VALUES ('$nic', '$name', '$address', '$tel', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h2>Student Registration</h2>
    <form method="post">
        <label>NIC:</label>
        <input type="text" name="nic" required>
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Address:</label>
        <input type="text" name="address" required>
        <label>Tel No:</label>
        <input type="text" name="tel" required>
        <label>Course:</label>
        <input type="text" name="course" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>
