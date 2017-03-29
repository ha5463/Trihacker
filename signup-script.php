<?php
require_once("connection.php");
session_start();
if(isset($_SESSION['email']))
{
  header('location:home.php');
}
//print_r($_POST);
$error = array();
$variable=' ';
if(isset($_POST['submit']))
{
  //echo "FORM SUBMITTED"."\n";
  $name=trim($_POST["name"]);
  $password=htmlspecialchars($_POST["password"]);
  $email=htmlspecialchars(trim($_POST["email"]));
  $contact=htmlspecialchars(trim($_POST["contact"]));
  $address=htmlspecialchars($_POST["address"]);
  $city=htmlspecialchars($_POST["city"]);
  $val = "SELECT Email FROM persons";
  $result = mysqli_query($connection,$val);
  if(isset($result))
  {
   while( $emailcheck=mysqli_fetch_array($result))
  {
   // echo $emailcheck ." ";
    if($emailcheck == $email)
      $error['email']="Email Already Registered.";
   }}
  if(strlen($contact)<10 || strlen($contact)>11)
  {
    $error['contact']="Contact No. Invalid.";
  }
  if(empty($error))
  {
  $query = "INSERT INTO persons ";
  $query .= "(Name, Email, Password, Contact, Address, City) ";
  $query .= "VALUES ('{$name}', '{$email}', '{$password}', {$contact}, '{$address}', '{$city}')";
 // echo $query;
  $con=mysqli_query($connection,$query); 
  if($con)
  {
     session_start();
     $_SESSION['email']='{$email}';
     header('location:home.php');
   
  
  }
      }
}
?>