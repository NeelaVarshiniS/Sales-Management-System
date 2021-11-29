<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Order Details</title>
</head>

<body>


<?php

$Date=$_POST['Date'];
$cusmail=$_POST['cusmail'];
$repid=$_POST['repid'];
$proid=$_POST['proid'];
$quantity=$_POST['quantity'];


$data2="select * from `product` where id='$proid'";
$exe = mysqli_query($con,$data2);
while($data = mysqli_fetch_array($exe)) { 
    $price= $quantity * $data['cost'];;


$data3="Insert into order_details(Date,cusmail,repid,proid,quantity,price)			 
values ('$Date','$cusmail','$repid','$proid','$quantity','$price')";

$insert= mysqli_query($con,$data3);

$d1=$data['avail'];
$avail1=$d1-$quantity;
 
$data1="UPDATE `product` SET avail='$avail1' where id='$proid'";
$exe1 = mysqli_query($con,$data1);


if($insert)
{
echo "<script>alert('Order have successfully added')</script>";
echo "<script>window.open('index1.php?view_orders','_self')</script>";
}
else
{
include_once('vieworder.php');
}
}
?>

</body>
</html>



