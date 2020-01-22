<?php
session_start();
include("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Remedic - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="flaticon-pharmacy"></i><span>Re</span>Medic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="departments.php" class="nav-link">Departments</a></li>
           
         <?php
         if (isset($_SESSION['patient_id'])) {
           echo "<li class='nav-item'><a href='myappointment.php?patient_id={$_SESSION['patient_id']}' class='nav-link'>My Appointment</a></li>";
           echo "<li class='nav-item'><a href='contact.php' class='nav-link'>Contact</a></li>";
         }
          ?>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <?php
          if (!isset($_SESSION['patient_id'])) {
            echo "<li class='nav-item'><a href='public_login.php' class='nav-link' title='login'><img src='images/icon.png' width='25px' height='25px'></a></li>";
          }
          ?>
          <?php
          if (isset($_SESSION['patient_id'])) {
             echo " <li class='nav-item'><a href='patient_profile.php' class='nav-link' title='profile'><img src='images/profile.jpg' width='35px' height='35px'></a></li>";
             echo " <li class='nav-item'><a href='public_logout.php' class='nav-link' title='logout'><img src='images/logout.png' width='25px' height='25px'></a></li>";
            
          }
        
          ?>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->