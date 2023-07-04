<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up</title>
    <style>
        input {
            display: block;
            margin-left: 500px;
            padding: 10px 20px;
            width: 300px;
            border-radius: 10px;
            border: none;
            margin-bottom: 10px;
            outline: none;
        }

        button {
            font-family: "Arvo", cursive;
            width: 300px;
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
            margin-bottom: 10px;
        }

        small {
            color: white;
            font-size: 15px;
        }

        a {
            text-decoration: none;
            color: #DBEDF3;
            font-family: "Arvo", cursive;
            text-shadow: 3px 0 #DA0463;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>SignIn</h1>
        <form method="post" action="signIn-logic.php">
            <input type="email" id="email" name="email" placeholder="Your email">
            <input type="password" id="password" name="password" placeholder="Your password">
            <button type="submit">Sign In</button>
        </form>
    </div>
    <small>If you don't have account <a href="signUp.php">Sign Up</a></small>
</body>

</html>