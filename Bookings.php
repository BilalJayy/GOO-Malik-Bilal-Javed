<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
  // Redirect the user to the login page
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
      <button class="btn btn-primary" data-toggle="modal" data-target="#bookingModal">Book Now</button>

<!-- Modal -->
<div id="bookingModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Booking Form</h4>
      </div>
      <div class="modal-body">
        <!-- Add your booking form or additional information here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

    </div>

    <div class="car">
      <img src="pictures/car2.jpg" alt="car 2">
      <h2>Honda City</h2>
      <p>Looking to go on a long drive? Honda City is the perfect car for you, comfortable for long drives. </p>
      <button class="btn btn-primary" data-toggle="modal" data-target="#bookingModal">Book Now</button>

<!-- Modal -->
<div id="bookingModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Booking Form</h4>
      </div>
      <div class="modal-body">
        <!-- Add your booking form or additional information here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


    <div class="car">
      <img src="pictures\car3.jpg" alt="car 3" width="350" height="250">
     <h2>Honda BRV</h2>
      <p>Planning on going out with family or friends? Honda BRV seats 7 people easily.</p>
      <button class="btn btn-primary" data-toggle="modal" data-target="#bookingModal">Book Now</button>

<!-- Modal -->
<div id="bookingModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Booking Form</h4>
      </div>
      <div class="modal-body">
        <!-- Add your booking form or additional information here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  </div>
</div>

</body> 