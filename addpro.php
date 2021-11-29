<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ausweg Automation:Add New Product</title>
<style>
input { font-size: 18px; }
div { font-size: 17px; }
</style>
</head>

<body>

   
<?php

$proname=$_POST['proname'];
$cost=$_POST['cost'];
$avail=$_POST['avail'];
$reorder=$_POST['reorder'];

if($reorder>$avail)
{
   echo "<script>alert('Reorder level is high than availability')</script>";
}
else
{
$data="Insert into product(proname,cost,avail,reorder)			 
values ('$proname','$cost','$avail','$reorder')";

$insert= mysqli_query($con,$data);
if($insert)
{
echo "<script>alert('Product have successfully added')</script>";
echo "<script>window.open('index1.php?view_products','_self')</script>";
}
else
{
echo "<script>alert('Product already exists')</script>";
include_once('view_product.php');
}
}
?>

</body>
</html>



