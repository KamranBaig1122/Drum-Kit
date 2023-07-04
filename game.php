<?php
session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $name = $user['name'];
} else {
    header('Location: Index.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Drum Kit</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
</head>
<style>
  .user{
    font-size: 20px;
    text-align: left;
  }
</style>
<body>
  <h1 class="user">User : <?= $name ?></h1>
  <h1 id="title">Drum 🥁 Kit</h1>
  <div class="set">
    <button class="w drum">w</button>
    <button class="a drum">a</button>
    <button class="s drum">s</button>
    <button class="d drum">d</button>
    <button class="j drum">j</button>
    <button class="k drum">k</button>
    <button class="l drum">l</button>
  </div>


<script src="index.js" charset="utf-8"></script>

<footer>
 A short webGame by Hamza. 
</footer>
</body>
</html>
