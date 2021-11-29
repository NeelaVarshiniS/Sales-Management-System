<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ausweg Automation:Add New Customer </title>
<style>
input { font-size: 18px; }
div { font-size: 17px; }
</style>
</head>

<body>

   
<?php

$custname=$_POST['custname'];
$date=$_POST['date'];
$custdoor=$_POST['custdoor'];
$custstreet=$_POST['custstreet'];
$custmail=$_POST['custmail'];
$custmob=$_POST['custmob'];
$custland=$_POST['custland'];
$custemail=$_POST['custemail'];

$data="Insert into custind(custname,date,custdoor,custstreet,custmail,custmob,custland,custemail)			 
values ('$custname','$date','$custdoor','$custstreet','$custmail','$custmob','$custland','$custemail')";

$insert= mysqli_query($con,$data);
if($insert)
{
echo "<script>alert('Customer have successfully added')</script>";
echo "<script>window.open('index1.php?view_customers','_self')</script>";
}
else
{	
echo "<script>alert('Customer Mail Id already exists')</script>";
include_once('index.php');
}
?>

</body>
</html>



