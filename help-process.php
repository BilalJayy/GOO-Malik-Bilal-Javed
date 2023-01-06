<?php
  // Connect to the database
  $host = "localhost";
  $username = "root";
  $password = "";
  $db_name = "goo";

  $conn = mysqli_connect($host, $username, $password, $db_name);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

  // Insert a new record into the "messages" table
  $message = $_POST['message'];
  $sql = "INSERT INTO messages (text) VALUES ('$message')";
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the connection
  mysqli_close($conn);
?>
