<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Top Customer</title>
    <style type="text/css">
	body {
    font: 12pt Georgia, "Times New Roman", Times, serif;
    line-height: 1.3;
}
   .table
  {
	  width:100%;
	  
  }
  .td
  {
	  align:center;
  }
div.header {
    display: block;
    text-align: center;
    position: running(header);
    width: 100%;
}

div.footer {
    display: block;
    text-align: center;
    position: running(footer);
    width: 100%;
}
.thead { display:table-header-group }
  </style>
  <script language="Javascript1.2">
<!--

function printpage() 
{
window.print();
}

//-->
</script>

</head>
<body  onLoad="printpage()">
<h1>Top Customer report</h1>

<!-- Custom HTML header -->
<div class="header">
    Report Copy
</div>
<div class="right">
Date:
	<SCRIPT LANGUAGE="Javascript">

// Array of day names
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday", "Thursday","Friday","Saturday");

// Array of month Names
var monthNames = new Array ("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

var now = new Date();
document.write(dayNames[now.getDay()] + ", " + monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear());
</SCRIPT>
</div>
<br/>
<div class="content">
<div id="pageFooter" align="left">
<div class="custom-page-start"  >
<?php
require('dbconnection.php');
$from=$_POST['from'];
$to=$_POST['to'];
$res=mysqli_query($con,"select * from order_details where date='$from' OR date='$to' ORDER by price DESC");
if(mysqli_num_rows($res)>0){
echo "<table class='table table-hover '  border='1' align='center' >";
		echo '</thead><tr><th>Date</th><th>Email</th><th>Product ID</th><th>Quantity</th><th>Price</th></tr></thead>';
		while($row=mysqli_fetch_assoc($res)){
			if($row['proid']>3 && $row['price']>15000)
			{
			echo '<tr><td>'.$row['Date'].'</td><td>'.$row['cusmail'].'</td><td>'.$row['proid'].'</td><td>'.$row['quantity'].'</td><td>'.$row['price'].'</td></tr>';
			}
		}
	echo '</table>';
}else{
	echo "Data not found";
}
?>
</div>
</div>
</div>
<div class="footer">
   Ausweg Automtion
</div>
</body>
</html>