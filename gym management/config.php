<?php
$host = "localhost";
$user = "root"; // Default user for XAMPP
$password = ""; // Default password is empty
$database = "gym_management"; // Make sure your database name is correct

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
