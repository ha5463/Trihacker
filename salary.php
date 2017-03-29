<?php

session_start();
if(!isset($_SESSION['email']))
{
  header('location:index.php');
}
?>
<?php
if($_SESSION['string'] === preg_replace('/\s+/', '', $_SESSION['string1']))
              {
                header("loaction:success.php");
              }
if($_SESSION['lives'] == 0)
                {
                    header("loaction:failure.php");
                }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Salary Survey</title>
  <style>
   .panel-heading{
    font-size:17px;
   }
   a
   {
    color:white;
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
<body class="container-fluid" onload="f1()">

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
       <br>
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

          <div id="gamearea" style="width:950px; height:1550px; background-color:ed; float:right; border-left:2px solid grey;padding-left:50px; ">
          <div style="width:350px; height:50px; background-color:ed; float:right; margin-right:-110px">
          <BR>
               <?php 
                    include('timer.php');
                  ?>
          </div>
          <h2 style="margin-left:0px;font-family:helvetica; color:rgb(00,00,8b)"> Salary Survey</h4>
          <br>
          
            <?php
                $file = fopen("3/prob.txt", "r");
                       $i = 0;
                            while (!feof($file)) {

                         $line_of_text = fgets($file);
                         echo $line_of_text."<br />";
                       
                       }
                              fclose($file);
            ?>
            <h4 style="margin-left:0px; font-family:helvetica; color:red"> Input : </h4>
             <?php
                $file = fopen("3/input.txt", "r");
                       $i = 0;
                            while (!feof($file)) {

                         $line_of_text = fgets($file);
                         echo $line_of_text."<br />";
                       
                       }
                              fclose($file);
            ?>
             <h4 style="margin-left:0px; font-family:helvetica; color:red"> Output : </h4>
             <?php
                $file = fopen("3/output.txt", "r");
                       $i = 0;
                            while (!feof($file)) {

                         $line_of_text = fgets($file);
                         echo $line_of_text."<br />";
                       
                       }
                              fclose($file);
            ?>
            <h4 style="margin-left:0px; font-family:helvetica; color:red"> Constraint : </h4>
             <?php
                $file = fopen("3/constraint.txt", "r");
                       $i = 0;
                            while (!feof($file)) {

                         $line_of_text = fgets($file);
                         echo $line_of_text."<br />";
                       
                       }
                              fclose($file);
            ?>
            <h4 style="margin-left:0px; font-family:helvetica; color:red"> Sample Input : </h4>
             <?php
                $file = fopen("3/sInput.txt", "r");
                       $i = 0;
                            while (!feof($file)) {

                         $line_of_text = fgets($file);
                         echo $line_of_text."<br />";
                       
                       }
                              fclose($file);
            ?>
             <h4 style="margin-left:0px; font-family:helvetica; color:red"> Sample Output : </h4>
             <?php
                $file = fopen("3/sOutput.txt", "r");
                       $i = 0;
                            while (!feof($file)) {

                         $line_of_text = fgets($file);
                         echo $line_of_text."<br />";
                       
                       }
                              fclose($file);
            ?>
             <h4 style="margin-left:0px; font-family:helvetica; color:red"> Explaination (Test Case 3): </h4>
             <?php
                $file = fopen("3/explaination.txt", "r");
                       $i = 0;
                            while (!feof($file)) {

                         $line_of_text = fgets($file);
                         echo $line_of_text."<br />";
                       
                       }
                              fclose($file);
            ?>
            <h4 style="margin-left:0px; font-family:helvetica; color:red"> Input Files : </h4>
                 <a href="3/inp1.txt" download>Input 1</a><br />
                 <a href="3/inp2.txt" download>Input 2</a><br />
                 <a href="3/inp3.txt" download>Input 3</a><br />
                 <a href="3/inp4.txt" download>Input 4</a><br />
                 <a href="3/inp5.txt" download>Input 5</a><br />
                 <a href="3/inp6.txt" download>Input 6</a><br />
                 <a href="3/inp7.txt" download>Input 7</a><br />
            <h4 style="margin-left:0px; font-family:helvetica; color:red"> Enter Output : </h4>
            <form role="form" action="check3.php" method="post">
             <div class="form-group">
             <h5 style="margin-left:0px; font-family:helvetica; color:green"> Select Input File : 
             <input type="radio" name="number" value="1" > 1 &nbsp;
             <input type="radio" name="number" value="2"> 2 &nbsp;
             <input type="radio" name="number" value="3"> 3 &nbsp;
            <input type="radio" name="number" value="4"> 4 &nbsp;
              <input type="radio" name="number" value="5"> 5 &nbsp;
              <input type="radio" name="number" value="6"> 6 &nbsp;
              <input type="radio" name="number" value="7"> 7 
              <br>
              <br>
         <input type="file" name="image" />
       <br>
         <button type="submit" name="submit" class="btn btn-primary" style="float:right" value="submit">Submit</button>
        </form>
        <br>
        <br>
          

    </div>
  
  </div>
    </div>
  </body>
  </script>
  </script>
  </style>
  </head>
  </html>