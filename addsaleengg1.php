<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ausweg Automation:Add New Sales Engineer </title>
</head>

<body>

   
<?php

$repname=$_POST['repname'];
$repdoor=$_POST['repdoor'];
$repstreet=$_POST['repstreet'];
$repcity=$_POST['repcity'];
$reppin=$_POST['reppin'];
$repmob=$_POST['repmob'];
$repland=$_POST['repland'];
$repemail=$_POST['repemail'];

$data="Insert into repdetails(repname,repdoor,repstreet,repcity,reppin,repmob,repland,repemail)			 
values ('$repname','$repdoor','$repstreet','$repcity','$reppin','$repmob','$repland','$repemail')";

$insert= mysqli_query($con,$data);
if($insert)
{
echo "<script>alert('Sales Engineer have successfully added')</script>";
echo "<script>window.open('index1.php?view_salesEngineer','_self')</script>";
}
else
{
echo "<script>alert('Sales Engineer already exists')</script>";
include_once('viewengg.php');
}
?>

</body>
</html>



