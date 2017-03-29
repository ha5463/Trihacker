<?php
  
include ('signup-script.php');
?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="index.css" type="text\css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  .error{
    color:red;
    padding-left:50px;
    font-family: helvetica;
    font-size: 12px;
    font-style: italic;

      }
  </style>
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
      <a class="navbar-brand" href="index.php" style="font-size:18px; padding-top:15px">Online Judge</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"> 

      <ul class="nav navbar-nav navbar-right" style="margin-right:-20px">
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
        <p >Don't have an account? <a href="signup.php">Register.</a></p>
        <form role="form">
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="EMail">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button></form>
          <br>
        <a href="#"> Forgot Password?</a>
        </div>
    </div>
     </div></div>
      <div class="container" style="margin-top:80px;">
     <div class="row" >
        <div class="col-sm-6" style="padding:30px;padding-top:0px;margin">  <img class="img-responsive" src="images\typing-code.jpg">
        </div>
        <div class="col-sm-4 col-sm-offset-2" > 
        <h2>SIGN UP</h2>
        
        <form role="form" action="signup.php" method="post">
        <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Name" required="true" value="<?php 
          if(isset($name))
          {
            echo $name;
          }
                ?>"
          >
        </div>
        <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required="true"
          value="<?php 
          if(isset($email))
          {
            echo $email;
          }
                ?>">
        
         <p class="error">  <?php 
        if(isset($error['email']))
        {
        echo '*'.$error['email'];
       }
        ?>
        </div></p>
        <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password" required="true">
        </div>
        <div class="form-group">
        <input type="text" name="contact" class="form-control" placeholder="Contact" required="true" value="<?php 
       if(isset($contact))
          {
            echo '*'.$contact;
          }
                ?>">
          <p class="error"> <?php 
        if(isset($error['contact']))
        {
        echo $error['contact'];
       }
       ?></p>
        </div>
        <div class="form-group">
        <input type="text" name="city" class="form-control" placeholder="City" required="true" value="<?php 
          if(isset($city))
          {
            echo $city;
          }
                ?>">
        </div>
        <div class="form-group">
        <input type="text" name="address" class="form-control" placeholder="Address" required="true"
        value="<?php 
          if(isset($address))
          {
            echo $address;
          }
                ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="float:right" value="submit">Submit</button>
        </form>
 
      </div>
      
      </div>
      </div>
   
    
  </body>
  </script>
  </script>
  </head>
  </html>
