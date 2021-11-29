<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php include("header.php");?>
<style type="text/css">
.style24 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style26 {color: #009933; font-weight: bold;}
.table,th{
border: 2px solid black;
} 
.table{
border-spacing:10px;
}
.td,tr
{
color:black;
}
#indexTable
{
	border-collapse:collapse;
}
input { font-size: 18px; }
div { font-size: 17px; }
</style>
<title>AUSWEG AUTOMATION</title>
<script>
function validate()
{
   var alpha=/^[a-zA-Z\s-,]+$/;
   if( document.autoSumForm.proname.value == "" )
   {
     alert( "Please provide Product Name!" );
     document.autoSumForm.proname.focus() ;
     return false;
   }
   if( document.autoSumForm.reorder.value == "" )
   {
     alert( "Please provide Product Name!" );
     document.autoSumForm.reorder.focus() ;
     return false;
   }
 if( document.autoSumForm.cost.value == "" ||
           isNaN( document.autoSumForm.cost.value) )
   {
     alert( "Please provide a Cost in the format 123." );
     document.autoSumForm.cost.focus() ;
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
</head>

<body>
<div class="container">

<?php
include("username.php");
?>

<div class="headerplace">You are here >> Product Information >> <a href="index1.php?add_product">Add New Product </a></div><br/><br/>
	<div class="headercontent">
			<div id="tabs-1"> 
			<p>
   <form name="autoSumForm" onSubmit="return(validate());" action="addpro.php" method="post" >
   <table id="indextable" width="40%" align="center" >
     <tr>
  <td colspan=2>
     <center><font size=4><b>NEW PRODUCT ADDING FORM</b></font></center>
  </td>
</tr>
  <td>PRODUCT NAME</td>
  <td><input type="text" name="proname" id="proname" size="30" required></td>
</tr>
<tr>
</tr>
<tr>
  <td>PRODUCT COST</td>
  <td><input type="number" name="cost" id="cost" size="10" min="0" required></td>
</tr>
<tr>
   <td>AVAILABILITY</td>
  <td><input type="number" name="avail" id="avail" size="30" min="0" required></td>
</tr>
<tr>
   <td>Reorder Level</td>
  <td><input type="number" name="reorder" id="reorder" size="30" min="0" required></td>
</tr>
<tr>
  <td><input type="reset"></td>
  <td colspan="2"><input type="submit" value="Submit Form" /></td>
</tr>  
</table>
</form>
</div>			
</div>
</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
<center>
<?php include("footer.php");?></center>
</div>

</body>

</html>