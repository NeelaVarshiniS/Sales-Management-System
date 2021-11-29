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
$tg=$_POST['target_sales'];
$td=$_POST['target_date'];


$data="Insert into target_details(date,repid,target_sales,target_date)			 
values ('$Date','$repid','$tg','$td')";

$insert= mysqli_query($con,$data);
if($insert)
{
echo "<script>alert('Target have successfully added')</script>";
echo "<script>window.open('index1.php?view_target','_self')</script>";
}
else
{
include_once('index.php');
}
?>

</body>
</html>



