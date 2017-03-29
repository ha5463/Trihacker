<?php
require_once('connection.php');
session_start();
if(isset($_SESSION['email']))
{
  header('location:game.php');
}
if(isset($_POST['submit']))
{
$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);
$query = "SELECT * FROM persons WHERE Email='{$email}'";
$con=mysqli_query($connection,$query);
if($con)
{
$row = mysqli_fetch_assoc($con);
if($row['Password'] === $password)
{
	session_start();
    $_SESSION['email']=$row['Email'];
	header('location:game.php');
}    
 }
else
{
	echo "ERROR";
	header('loaction:error.php');
}
}
?>
