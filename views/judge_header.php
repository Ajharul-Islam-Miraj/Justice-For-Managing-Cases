<?php
   if(!isset($_COOKIE["id"])){
      header("Location: landing.php");
   }
?>
<html>
    <head>
        <title>Justice - judge</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="icon" href="../assets/favicon_all_logo.png">
        <link rel="stylesheet" type="text/css" href="../styles/judge_styles.css">
    </head>
    <body>
    <header>
      <nav class="flex item-center space-between">
<div class="left flex item-center">
  <div class="logo">
    <img src="../assets/lawyer_dashboard_top_left_logo.png" height="50px" width="60px">
  </div>
  <div class="">
    <a href="judge_dashboard.php">Dashboard</a>
    <a href="j_view_cases.php">View Cases</a>
    <a href="j_clints.php">Search Client and Lawyer</a>
    <a href="j_Communication.php">Communication</a>
    </div>
</div>
<div class="right">
  <a class="btn btn-outline-info " href="judge_profile.php" style="color:white;"><i class="fas fa-address-card"></i>Profile</a> &nbsp&nbsp
 <a class="btn btn-outline-danger" onclick="onLogOutDeleteSessionCookie()" href="landing.php" style="color:white;"><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>
  </nav>
      </header>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <body>

  </html>
