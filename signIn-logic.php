<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = new mysqli("localhost", "root", "", "drum");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "SELECT * FROM user WHERE email = '$email' AND pass = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['user'] = $user;
        header('Location: game.php');
        exit;
        header('location: game.php');
    } else {
        header('location: Index.php');
    }
    $conn->close();
?>