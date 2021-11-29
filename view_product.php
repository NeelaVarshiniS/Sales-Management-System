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
<title>View Product</title>
<style>
input { font-size: 18px; }
div { font-size: 17px; }
</style>
</head>

<body>
<?php
include("username.php");
?>

<div class="headerplace">You are here >> Product Information >> <a href="index1.php?view_products">View Product List </a></div>
<br/>
<br/>
<?php
	$query = "SELECT *  FROM `product`;";
	$search = mysqli_query($con,$query);
	
	echo "<table class='table table-bordered table-hover table-striped' border='1' align='center'>";
	echo "<tr><th>Reference No</th><th>Product Name</th><th>Cost</th><th>Availability</th><th>Reorder</th></tr>";
		while ($data = mysqli_fetch_array($search))
		{	
			echo "<tr><td>".$data['id']."</td><td>".$data['proname']."</td><td>".$data['cost']."</td><td>".$data['avail']."</td><td>".$data['reorder']."</td></tr>";
		}
		echo "</table>";

?>
</body>
</html>