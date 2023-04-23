<?php
    include('C:\xampp\htdocs\signin\system\backend\connect/connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/styles.css">
    <title>Login</title>
</head>

<body>
    <form class="login-form" name="form" action="http://localhost/signin/system/backend/login.php"
        onsubmit="return isvalid()" method="POST">
        <h2 class="form-heading">Welcome back!</h2>

        <!-- username -->
        <div class="form-group">
            <label>Username</label>
            <div class="password-input">
                <input type="text" id="user" name="user">
            </div>
            <span id="name-error"></span>
        </div>

        <!-- password -->
        <div class="form-group">
            <label>Password</label>
            <div class="password-input">
                <input type="password" id="pass" name="pass">
                <i class="far fa-eye" id="eye-icon" data-show="false"></i>
            </div>
            <span id="pass-error"></span>
        </div>

        <!-- button -->
        <button type="submit" id="btn" value="Login" name="submit">Login</button>
    </form>

    <script src="../js/validatation.js"></script>
    <script src="../js/icon.js"></script>

</body>

</html>