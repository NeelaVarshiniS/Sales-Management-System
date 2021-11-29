
<html>
<head>
<title>Top customer</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sty.css">
    </link>
		<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<style>
<style>
input { font-size: 18px; }
div { font-size: 17px; }
</style>
<script>
function formfuc()
{
var Date=document.form.from.value;
var to=document.form.to.value;

if(Date=="")
{
window.alert("Please enter the from date");
return false;
}
if(to=="")
{
window.alert("Please enter the two date");
return false;
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

<div class="headerplace">You are here >>Customer Information >> <a href="index1.php?new_customer">Report </a></div>

<center>
<table border="0" width="480px">
<form action="s1.php" onsubmit="return formfuc()" method="POST">
<br/>
<tr><td><br><div class="ss">From Date</div></td>
          <td><br>
  <input type="date" size=30 style="height: 50px;" name="from" id="d1" required></input></td></tr>
<tr><td><br><div class="ss">To Date</div></td>
          <td><br>
  <input type="date" size=30 style="height: 50px;"name="to" id="d2" required></input></td></tr>
<tr><td></td>
  <td><br><input type="submit" name="submit" value="submit"></td></tr>

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
document.getElementById("d1").setAttribute("max", today);
document.getElementById("d2").setAttribute("max", today);

</script>
</body>
</html>