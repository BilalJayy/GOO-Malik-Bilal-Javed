<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$host = "localhost";
$username = "root";
$password = "";
$db_name = "profile";

$link = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>