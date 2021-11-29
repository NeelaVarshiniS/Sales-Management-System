<?php
include("dbconnection.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<title>Ausweg Automation</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<style type="text/css">
<!--
.style1 {color: #FFCC66}
-->
<script>
function validate()
{
   var alpha=/^[a-zA-Z\s-,]+$/;
   if( document.autoSumForm.proid.value == "" )
   {
     alert( "Please provide Product Name!" );
     document.autoSumForm.proid.focus() ;
     return false;
   }
    if( document.autoSumForm.avail.value == "" ||
           isNaN( document.autoSumForm.cost.value) )
   {
     alert( "Please provide a Availability in the format 123." );
     document.autoSumForm.avail.focus() ;
     return false;
   }
   return( true );

}
</script>
</style>
</head>

<body>
<div class="container">

<?php
include("username.php");
?>
	

<div class="headerplace">You are here >> Update Stock >> <a href="index1.php?update_stock">Stock</a></div>
<div class="headercontent">
	<form name="autoSumForm" onSubmit="return(validate());" action="view_stock1.php" method="post" >
   <table id="indextable" width="40%" align="center" >
     <tr>
  <td colspan=2>
     <center><font size=4><b>NEW PRODUCT ADDING FORM</b></font></center>
  </td>
</tr>
  <td>PRODUCT ID</td>
  <td><input type="text" name="proid" id="proid" size="30" required></td>
</tr>
<tr>
</tr>
<tr>
   <td>AVAILABILITY</td>
  <td><input type="text" name="avail" id="avail" size="30"required></td>
</tr>
<tr>
  <td><input type="reset"></td>
  <td colspan="2"><input type="submit" value="Submit Form" /></td>
</tr>  
</table>
</form>
<p>
  </div>

<div class="clearer"><span></span></div>
<br/>
<br/>
<br/>
<center>
<?php include("footer.php");?>
</center>
</div>
</body>
</html>


