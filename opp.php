<?php
include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Order</title>
</head>

<body>
<?php
include("username.php");
?>
<div class="headerplace">You are here >> Oppourtunity Information >> <a href="index1.php?opp">Sales List </a></div>
<br/>
<br/>
<?php



	$query = "SELECT DISTINCT(repid)   FROM `order_details` ";
	$search = mysqli_query($con,$query);

    echo "<table class='table table-bordered table-hover table-striped'  border='1' align='center' >";
	echo "<tr><th>Rep Name</th><th>Date</th><th>Target</th><th>Sales</th></tr>";
	while ($data3 = mysqli_fetch_array($search))
		{
			$d1=$data3['repid'];
			
	        $search3 = mysqli_query($con,"SELECT SUM(price)  FROM `order_details` where repid='$d1'");
			$c=mysqli_fetch_array($search3);
			
			
			
			
	$query1 = "SELECT *  FROM `repdetails` where repid='$d1' ";
	$search1 = mysqli_query($con,$query1);
	while ($data1 = mysqli_fetch_array($search1))
		{	
	
	$query2 = "SELECT *  FROM `target_details` where repid='$d1' ";
	$search2 = mysqli_query($con,$query2);
	while ($data2 = mysqli_fetch_array($search2))
		{	
	
	 
			
			echo "<tr><td>".$data1['repname']."</td><td>".$data2['date']."</td><td>".$data2['target_sales']."</td><td>".$c[0]."</td></tr>";
		
	        if($data2['target_sales']< $c[0])
			{
                 //echo "<marquee behavior='scroll' direction='left'><font color='black' size='5px'>";
                 echo $data1['repname'];
				 echo " has achieved his target!!!!";
				 echo "<br/>";
;
                //echo "<script>window.open('index1.php?view_target','_self')</script>";				
			}
		}
		}
		}
echo "</table>";
?>
</body>
</html>