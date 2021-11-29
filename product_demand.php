<?php
include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demand Product</title>
</head>

<body>
<?php
include("username.php");
?>

<div class="headerplace">You are here >> Product Information >> <a href="viewcust.php">View Product List On Demand </a></div>
<br/>
<br/>
<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Date</th>
<th>Product Id</th>
<th>Produc Name</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;




$get_order = "select * from order_details order by quantity DESC LIMIT 0,5";
$run_order = mysqli_query($con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){


$order_id = $row_order['billno'];

$date = $row_order['Date'];

$c_id = $row_order['cusmail'];

$product_id = $row_order['proid'];




$qty = $row_order['quantity'];

$price = $row_order['price'];
$i++;

?>

<tr>

<td><?php echo $date; ?></td>
<td><?php echo $product_id; ?></td>
<td>
<?php

$get_customer = "select * from product where id='$product_id'";
$run_customer = mysqli_query($con,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_email = $row_customer['proname'];
echo $customer_email;
?>
</td>





</tr>

<?php } ?>

</tbody><!-- tbody Ends -->


</table>
</body>
</html>