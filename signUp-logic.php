<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$conn = new mysqli("localhost", "root", "", "drum");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "INSERT INTO user (name, email, pass, age, gender) VALUES ('$name', '$email', '$password', '$age', '$gender')";

if ($conn->query($query) === TRUE) {
    header('location: index.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
