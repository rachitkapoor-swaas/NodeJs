<?php

if (isset($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Check if the entered username is in the array of valid usernames
    if (in_array($username, $password)) {
        header("Location: users.php");
    } else {
        header("Location: validate.php");
    }
}
?>
