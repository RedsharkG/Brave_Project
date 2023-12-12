<?php
include 'login-conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
<!--    <link href="../Header/style.css" rel="stylesheet"/>-->
    <style>
        body {
            font-family: 'Nudista', sans-serif;
            background: linear-gradient(90deg, #140040 13.46%, #000 89.19%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #373750;
            padding: 80px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            color: #ffffff;
        }

        .form-group {
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #ffffff;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 30px;
        }

        button,
        .guest-button {
            width: 30%;
            margin: 0 auto; /* Add this line to center the buttons horizontally */
            padding: 10px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            display: block; /* Add this line to ensure the buttons take up the full width */
            background-color: #BA3902;
            color: #fff;
        }


        button:hover {
            background-color: #8C2A01;
        }

        .guest-button {

            width: 50%;
            padding: 10px;
            background-color: #0278BA;
            color: #fff;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }

        .guest-button:hover {
            background-color: #004F7F;
        }
        .forgot-password-link,
        .register-link {
            display: block;
            text-align: center;
            margin-top: 10px; /* Adjust the margin as needed */
            color: #fff;
            text-decoration: none;
            font-size: 10px; /* Add this line to set the font size */
        }

        .forgot-password-link:hover,
        .register-link:hover {
            text-decoration: underline;


        }

    </style>
    <!-- Include the Nudista font -->
    <link rel="stylesheet" href="https://github.com/brave/brave-ui/blob/master/packages/brave-ui/components/button/Button.css">
</head>
<body>

<div class="login-container">
    <h2>LOGIN</h2>
    <form method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Login</button>

        <!-- Add the "FORGOT PASSWORD" link here -->
        <a href="#" class="forgot-password-link">FORGOT PASSWORD</a>

        <!-- Add the "DON'T HAVE AN ACCOUNT? REGISTER" link here -->
        <a href="#" class="register-link">DON'T HAVE AN ACCOUNT? REGISTER</a>
        <br>

        <button type="button" class="guest-button">Login as Guest</button>
    </form>
</div>


</body>
</html>