<?php

include('./connect/connection.php');
include('./validation/validatation.php');

ob_start(); // start output buffering

if (isset($_POST['submit'])) {
    $username = sanitize_input($conn, $_POST['user']);
    $password = sanitize_input($conn, $_POST['pass']);

    // Validate input
    $username_error = validate_username($username);
    $password_error = validate_password($password);

    if ($username_error || $password_error) {
        // There was an error, display it to the user
        echo '<script>
                window.location.href = "http://localhost/signin/system/frontend/pages/index.php";
                alert("' . $username_error . '\n' . $password_error . '");
                </script>';
        exit();
    }

    // Validating on databases
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../frontend/pages/welcome.php");
        exit();
    } else {
        echo '<script>
                window.location.href = "http://localhost/signin/system/frontend/pages/index.php";
                alert("Login failed. Invalid username or password!!")
                </script>';
    }
}

ob_end_flush(); // end output buffering and send the output to the browser

function sanitize_input($conn, $input) {
    // Remove leading/trailing whitespaces
    $input = trim($input);
    // Remove backslashes (\)
    $input = stripslashes($input);
    // Convert special characters to HTML entities
    $input = htmlentities($input);
    // Escape special characters for use in SQL queries
    $input = mysqli_real_escape_string($conn, $input);

    return $input;
}