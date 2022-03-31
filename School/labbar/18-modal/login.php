<?php
include "configdb.php";
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

if ($email and $password) {
    $sql = "SELECT hash FROM register WHERE epost = '$email'";
    $resultatCheck = $conn->query($sql);
    $row = mysqli_fetch_array($resultatCheck, MYSQLI_ASSOC);
    if (password_verify($password, $row['hash'])) {
        // Query
        $sql = "SELECT * FROM register WHERE epost = '$email'";
        // Exectue a query
        $resultatCheck = $conn->query($sql);
        // Get query data
        $row = mysqli_fetch_array($resultatCheck, MYSQLI_ASSOC);
        // Destructure data
        $användare_namn = $row['namn'];
        // Print data
        header('HTTP/1.1 200 Successfully logged in');
    } else {
        header('HTTP/1.1 401 Unauthorized');
    }
}
