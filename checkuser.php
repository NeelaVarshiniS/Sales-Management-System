<?php
session_start();
include("dbconnection.php");
$user = trim($_POST['username']);
$pass = trim($_POST['password']);
$usertest = mysqli_query($con,"Select * from user where username = '$user' and password = '$pass'");
$row = mysqli_fetch_object($usertest);
if(@mysqli_num_rows($usertest)>0){
$_SESSION['username'] = $user;
echo "<script>alert('You are Logged in into admin panel')</script>";
echo "<script>window.open('index1.php?dashboard','_self')</script>";

}
else { include_once('index.php');
echo "<script>alert ('Incorrect Username or password');</script>";
}
?>