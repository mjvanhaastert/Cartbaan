<?php
$servername = "localhost";
$username = "mjvanh1q_kartbaan";
$password = "7CuGtibui!Nl";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>