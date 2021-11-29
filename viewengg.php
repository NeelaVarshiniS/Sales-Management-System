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
<title>View Sales Enginner</title>
</head>

<body>
<?php
include("username.php");
?>

<div class="headerplace">You are here >> Sales Engineer Information >> <a href="index1.php?view_salesEngineer">View Sales Engineer List </a></div>
<br/>
<br/>
<?php
	$query = "SELECT *  FROM `repdetails`;";
	$search = mysqli_query($con,$query);
	
	echo "<table class='table table-bordered table-hover table-striped' border='1' align='center'>";
	echo "<tr><th>Rep Id</th><th>Name</th><th>Door No</th><th>street</th><th>City</th><th>Pincode</th><th>Mobile Number</th><th>Lan Number</th><th>Email - Id</th></tr>";
		while ($data = mysqli_fetch_array($search))
		{	
			echo "<tr><td>".$data['repid']."</td><td>".$data['repname']."</td><td>".$data['repdoor']."</td><td>".$data['repstreet']."</td><td>".$data['repcity']."</td><td>".$data['reppin']."</td><td>".$data['repmob']."</td><td>".$data['repland']."</td><td>".$data['repemail']."</td></tr>";
		}
		echo "</table>";

?>
</body>
</html>