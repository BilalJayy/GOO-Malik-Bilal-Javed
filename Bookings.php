<?php

session_start();


if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
  
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Template.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="GOO.html">GOO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Bookings.php">Bookings</a></li>
        <li><a href="Wallet.html">Wallet</a></li>
        <li><a href="login.php">Account</a></li>
        <li><a href="Help.html">Help</a></li>
      </ul>
      
    </div>
  </div>
</nav>
<div class="bookings-page">
  <h1>Book a Car</h1>
  <p>Choose from our selection of cars:</p>

  <div class="car-grid">
    <div class="car">
      <img src="pictures/car1.jpg" alt="car 1">
      <h2>Suzuki Alto</h2>
      <p>Suzuki Alto is a great car to drive in city traffic, gives a good fuel average in these pricey conditions.</p>
      
    <div class="car">
      <img src="pictures/car2.jpg" alt="car 2">
      <h2>Honda City</h2>
      <p>Looking to go on a long drive? Honda City is the perfect car for you, comfortable for long drives. </p>

    <div class="car">
      <img src="pictures\car3.jpg" alt="car 3" width="350" height="250">
     <h3>Honda BRV</h3>
      <p>Planning on going out with family or friends? Honda BRV seats 7 people easily.</p>
    </div>
  </div>
</div>

<form action="rent.php" method="post">

    <div class="form-group">
        <label for="message-input">For how many hours would you like to book the car for?</label>
        <textarea class="form-control" id="message-input" name="message-input" rows="1"></textarea>
    </div>
    <div class="form-group">
        <label for="payment-select">Payment Option:</label>
        <select class="form-control" id="payment-select" name="payment-select">
            <option>Cash</option>
        </select>
    </div>
    <div class="form-group">
        <label for="counsellor-select">Cars:</label>
        <select class="form-control" id="car-select" name="car-select">
            <option value="1">Suzuki Alto</option>
            <option value="2">Honda City</option>
            <option value="3">Honda BRV</option>
        </select>
    </div>
    <button type="submit" id="standard-button" class="btn btn-primary">Submit</button>
</form>
</body> 

</html>