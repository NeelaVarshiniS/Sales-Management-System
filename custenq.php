
<html>
<head>
<title>Customer Enquiry</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sty.css">
    <link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<style>
input { font-size: 18px; }
div { font-size: 17px; }
</style>
<script>
function formfuc()
{
var Date=document.form.date.value;
var proid=document.form.repid.value;
var quantity=document.form.target_sales.value;
var price=document.form.target_date.value;

if(Date=="")
{
window.alert("Please enter the date");
return false;
}
if(proid=="")
{
window.alert("Please enter the Sales Engineer id");
return false;
}

if (quantity== "")                                  
    {
        window.alert("Please enter target");
         return false;
    }

if (price== "")                                  
    {
        window.alert("Please enter the target date");
         return false;
    }
   
   return true;
}
</script>

</head>
<body>
<div class="container">
<br/>
<br/>
<?php
include("username.php");
?>

<div class="headerplace">You are here >> Customer Enquiry Information >> <a href="index1.php?customer_enquiry">Customer Enquiry</a></div>

<center>
<table border="0" width="480px">
<form action="custenq1.php" onsubmit="return formfuc()" method="POST">
<br/>
<tr><td><br><div class="ss">Sales Representative Id</div></td>
          <td><br>
  <input type="text" size=30 style="height: 50px;" name="repid" required></input></td></tr>
<tr><td><br><div class="ss">Date</div></td>
          <td><br>
  <input type="date" size=30 style="height: 50px;"name="date" id="d1" required></input></td></tr>
    <tr><td><br><div class="ss">Product Id</div></td>
          <td><br>
  <input type="text" size=30 style="height: 50px;"name="proid" required></input></td></tr>
  <tr><td><br><div class="ss">Customer Id</div></td>
          <td><br>
  <input type="text" size=30 style="height: 50px;"name="custid" required></input></td></tr>
  <td><br>
  <input type="submit" name="submit" value="submit"></td></tr>

</form>
</table>
</div>
<script>
  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById("d1").setAttribute("value", today);
document.getElementById("d2").setAttribute("min", today);

</script>

</body>
</html>