<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up</title>
    <style>
        input{
            display: block;
            margin-left: 500px;
            padding: 10px 20px;
            width: 300px;
            border-radius: 10px;
            border: none;
            margin-bottom: 10px;
            outline: none;
        }
        button{
            font-family: "Arvo", cursive;
            width: 300px;
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Signup</h1>
    <form method="post" action="signUp-logic.php">
      <input type="text" id="name" name="name" placeholder="Your name">
      <input type="email" id="email" name="email" placeholder="Your email">
      <input type="password" id="password" name="password" placeholder="Your password">
      <input type="text" name="age" placeholder="Your Age">
      <input type="text" name="gender" placeholder="Your Gender">
      <button type="submit">Sign Up</button>
    </form>
  </div>
</body>
</html>