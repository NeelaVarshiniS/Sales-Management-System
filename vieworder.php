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
<title>View Order</title>
</head>

<body>
<?php
include("username.php");
?>
<div class="headerplace">You are here >> Order Information >> <a href="index1.php?view_orders">View Order List </a></div>
<br/>
<br/>
<?php
	$query = "SELECT *  FROM `order_details`;";
	$search = mysqli_query($con,$query);
	
	echo "<table class='table table-bordered table-hover table-striped'  border='1' align='center' >";
	echo "<tr><th>Bill No</th><th>Date</th><th>Rep Id</th><th>Customer Mail</th><th>Product id</th><th>Quantity</th><th>Price</th></tr>";
		while ($data = mysqli_fetch_array($search))
		{	
			echo "<tr><td>".$data['billno']."</td><td>".$data['Date']."</td><td>".$data['repid']."</td><td>".$data['cusmail']."</td><td>".$data['proid']."</td><td>".$data['quantity']."</td><td>".$data['price']."</td></tr>";
		}
		echo "</table>";

?>
</body>
</html>