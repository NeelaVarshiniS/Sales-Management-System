<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Target Details</title>
</head>

<body>


<?php

$Date=$_POST['date'];
$repid=$_POST['repid'];
$tg=$_POST['proid'];
$ts=$_POST['custid'];


$data="Insert into enquiry_details(date,repid,proid,custid)			 
values ('$Date','$repid','$tg','$ts')";

$insert= mysqli_query($con,$data);
if($insert)
{
echo "<script>alert('Customer Enquiry have successfully added')</script>";
echo "<script>window.open('index1.php?customer_enquiry','_self')</script>";
}
else
{
include_once('index.php');
}
?>

</body>
</html>



