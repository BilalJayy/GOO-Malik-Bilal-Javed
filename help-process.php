<?php
  // Connect to the database
  $host = "localhost";
  $username = "root";
  $password = "";
  $db_name = "profile";

  $conn = mysqli_connect($host, $username, $password, $db_name);


  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

  
  $message = $_POST['message'];
  $sql = "INSERT INTO messages (text) VALUES ('$message')";
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header("location: Help.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  
  mysqli_close($conn);
?>
