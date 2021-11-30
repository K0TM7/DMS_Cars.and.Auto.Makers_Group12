<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Cars and Automakers</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="./styles/home.css" rel="stylesheet">
  </head>
  
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="HomePage.php">Cars and Automakers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="HomePage.php">Home</a>
        </li>
        <?php
        if((!isset($_SESSION["useruid"])))
        {
          echo "<li class='nav-item'><a class='nav-link' href='pub_reg.php'>Public Registration</a></li>";
        }
        ?>
        <?php
        if(isset($_SESSION["useruid"]))
        {
            echo  "<li><a class='nav-link' href='saved.php'>Saved Cars</a></li>";
            echo  "<li><a class='nav-link' href='cars.php'>Cars Information</a></li>";
            echo "<li class='nav-item'>
          <a class='nav-link' href='change_username.php'>Change Username</a>
          </li>";
          echo "<li class='nav-item'>
          <a class='nav-link' href='change_password.php'>Forgot Password?</a>
          </li>";
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="about_us.php">About Us</a>
        </li>
        
      </ul>
      <?php
        if(isset($_SESSION["useruid"]))
        {
            echo  "<a class='btn btn-outline-primary' href='logout.php'>Logout</a>";
        }
        else{
          echo "<a class='btn btn-outline-primary' href='login.php'>Sign in</a>";
        }
        ?>
    </div>
  </nav>
</header>