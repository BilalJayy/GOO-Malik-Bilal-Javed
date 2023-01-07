<?php
// Initialize the session
session_start();

$server = "localhost";
$username = "myusername";
$password = "mypassword";

$conn = mysqli_connect($server, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$db_name = "mydatabase";

$db_selected = mysqli_select_db($conn, $db_name);

if (!$db_selected) {
    die("Could not select database: " . mysqli_error($conn));
}
$hours = $_POST["message-input"];
$payment = $_POST["payment-select"];
$car = $_POST["car-select"];
$sql = "INSERT INTO bookings (hours, payment, car) VALUES ('$hours', '$payment', '$car')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
