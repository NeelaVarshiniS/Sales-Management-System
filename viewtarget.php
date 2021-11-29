<?php
include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<title>View Target</title>
</head>

<body>
<?php
include("username.php");
?>
<div class="headerplace">You are here >> Target Information >> <a href="index1.php?viewcust.php">View Target List </a></div>
<br/>
<br/>
<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Date:</th>
<th>Representative Id</th>
<th>Target Sales:</th>
<th>Target Date:</th>



</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_order = "select * from target_details ";
$run_order = mysqli_query($con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){


$rep_id = $row_order['repid'];

$date = $row_order['date'];

$ts = $row_order['target_sales'];

$td = $row_order['target_date'];

$i++;

?>

<tr>

<td><?php echo $date; ?></td>
<td>
<?php

$get_customer = "select * from repdetails where repid='$rep_id'";
$run_customer = mysqli_query($con,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_email = $row_customer['repname'];
echo $customer_email;
?>
</td>

<td><?php echo $ts; ?></td>
<td><?php echo $td; ?></td>

</tr>

<?php } ?>

</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</body>
</html>