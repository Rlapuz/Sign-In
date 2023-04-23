<?php

$conn = mysqli_connect('localhost', 'root', '', 'auth');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>