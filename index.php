<?php
require_once("connection.php");
session_start();
if(isset($_SESSION['email']))
{
  header('location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <style>
   .panel-heading{
    font-size:17px;
   }
   </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid">

<nav class="navbar navbar-default navbar-fixed-top" style="min-height:50px">
  <div class="container">
    <div class="navbar-header" style="font-size:30px" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="font-size:18px; padding-top:15px" >Online Judge</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"> 

      <ul class="nav navbar-nav navbar-right" style="margin-right:-15px">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"> </span> Sign Up</a></li>
      <li><a href="#"><div data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"> </span> Login</div></a></li>
      
      </ul>
    </div>
    </div>
  </nav>
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md" style="margin-top:60px;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
          x</button>
          <h4 class="modal-tile"> LOGIN</h4>
          </div>
        <div style="padding:15px;">
        <p >Don't have an account? <a href="signup.html">Register.</a></p>
        <form role="form" action="login-script.php" method="post">
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="EMail">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary" value="submit" name="submit">Login</button></form>
          <br>
        <a href="#"> Forgot Password?</a>
        </div>
    </div>
     </div></div>
  <div class="row" style="margin-top:80px;"> 
      <div class="col-lg-12" style=" ">
       <h1 style="margin-left:250px;font-size:60px;margin-top:0;font-family:lucida grande">Welcome to Online Judge </h1>
      <div data-toggle="modal" data-target="#myModal"><img src="images/1.jpg" style="margin-left:300px;" alt="Play Hangman"></div>
      <h4 style="margin-left:300px;margin-top:10ox;font-family:helvetica">Please Signup / Login to Proceed and Code.</h1>
          
            
    </div>
    </div>

  </body>
  </script>
  </script>
  </style>
  </head>
  </html>