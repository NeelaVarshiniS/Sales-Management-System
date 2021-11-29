
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
input { font-size: 18px; }
div { font-size: 17px; }
</style>
<script>
function formfuc()
{
var repid=document.form.repid.value;


if(repid=="")
{
window.alert("Please enter the Rep id Correctly");
return false;
}

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

<div class="headerplace">You are here >> Sales Engineer Analysis >> <a href="index1.php?sales_rep">Report </a></div>

<center>
<table border="0" width="480px">
<form action="salese1.php" onsubmit="return formfuc()" method="POST">
<br/>
<tr><td><br><div class="ss">Sales Rep Id</div></td>
          <td><br>
  <input type="text" size=30 style="height: 50px;" name="repid" required></input></td></tr>
<tr><td></td>
  <td><br><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>
</div>
</body>
</html>