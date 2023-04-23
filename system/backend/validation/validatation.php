<?php
// Validation functions

function validate_username($username) {
    if (empty($username)) {
        return "Please enter a username";
    }
    return "";
}

function validate_password($password) {
    if (empty($password)) {
        return "Please enter a password";
    }
    if (strlen($password) < 8) {
        return "Password must be at least 8 characters long";
    }
    return "";
}