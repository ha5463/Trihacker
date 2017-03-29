<?php

session_start();
if(!isset($_SESSION['email']))
{
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sorry</title>
  <style>
   .panel-heading{
    font-size:17px;
   }
   a
   {
    color:white;
    text-decoration:none;
   }
   a:hover{
    text-decoration:none;
   }
   #active a{
    font-size:15px;
    color: blue;
   }
   body{
    background-color:r;
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
      <li><a href="about.php"><span class="glyphicon glyphicon-tasks"> </span> About Us</a></li>
      <li><a href="developers.php"><span class="glyphicon glyphicon-phone"> </span>Developers</a></li>
       <li style="width:120px"><a href="logout.php"><span class="glyphicon glyphicon-log-in"> </span> Logout</a></li>
      </ul>
    </div>
    </div>
  </nav>
  <div class="container">
      <div class="row" style="margin-top:60px;"> 
     
       <div id="sidebar" style="width:150px;background-color:blu;margin-left:50px;float:left">
      <p style="font-size:13px">Choose Question</p>
     
          <button type="button" class="btn btn-success" style="width:120px; margin-left:20px; color:white" ><a href="morning.php" style="color:white; font-size:12px;" > Morning Assembly</a></button>  
           <br>
            <br>
           <button type="button" class="btn btn-success " style="width:120px;margin-left:20px"><a href="pallindrome.php" style="color:white; font-size:10px;" > Pallindromic Substring</a></button>  
           <br>
            <br>
           <button type="button" class="btn btn-success " style="width:120px;margin-left:20px" ><a href="salary.php" style="color:white; font-size:12px;" id="active"> Salary Survey</a></button> 
           <br> 
            <br>
      <button type="button" class="btn btn-success " style="width:120px;margin-left:20px" ><a href="tourist.php" style="color:white; font-size:12px;" style="color:white; font-size:12px;"> Tourist Dream</a></button> 
        <br> 
            <br>
          </div>
          <div id="gamearea" style="width:950px;height:500px;background-color:re;float:right;border-left:2px solid grey;padding-left:50px; ">
          <h1 style="margin-left:150px;font-size:50px;margin-top:0;font-family:helvetica">Sorry, answer is not present.</h1>
         
          <br>
          <br>
          <br>
          <br>
  
  </div>
    </div>
  </body>
  </script>
  </script>
  </style>
  </head>
  </html>