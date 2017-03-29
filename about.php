<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us
  </title>
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
      <li><a href="about.php"><span class="glyphicon glyphicon-tasks"> </span> About Us</a></li>
      <li><a href="developers.php"><span class="glyphicon glyphicon-phone"> </span>Developers</a></li>
       <li style="width:120px"><a href="logout.php"><span class="glyphicon glyphicon-log-in"> </span> Logout</a></li>
      
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
    <h1 style="margin-left:220px;font-size:50px;margin-top:0;font-family:helvetica">About the Online Judge System</h1>
    <p style="margin-left:220px;">The Online Judge platform is centered around an online judge system, which serves for the automatic assessment of user-submitted programs. Some of its most important features include:
      </p>
    <ul style="margin-left:220px;">
        <li><p>a rapidly growing problem-set of about 13000 tasks available for practice 24hours/day (in English, Polish, Vietnamese, Portuguese and other languages), including many original tasks prepared by the community of expert problemsetters associated with the project.</li>
        <li><p>a flexible testing system, supporting dynamic interaction with submitted programs and highly customisable output of assessment results.</li>
        <li><p>intuitive browser-based content management which allows users to set up their own contests within a matter of minutes, and to make use of tasks already available in the system.</li>
        <li><p>more than 2400 contests hosted as of 2012, ranging from instant challenges to long-term e-learning courses.</li>
    </div>
    </div>

  </body>
  </script>
  </script>
  </style>
  </head>
  </html>