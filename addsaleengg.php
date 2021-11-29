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

</style>
<title>AUSWEG AUTOMATION</title>
<script>
function validate()
{
   var alpha=/^[a-zA-Z\s-,]+$/;
   if( document.autoSumForm.repname.value == "" )
   {
     alert( "Please provide your Name!" );
     document.autoSumForm.repname.focus() ;
     return false;
   }
if( !document.autoSumForm.repname.value.match(alpha) )
   {
     alert( "Please provide correct name!" );
     document.autoSumForm.repname.focus() ;
     return false;
   }
   if( document.autoSumForm.repdoor.value == "" )
   {
     alert( "Please provide your door no!" );
     document.autoSumForm.repdoor.focus() ;
     return false;
   }
   if( document.autoSumForm.repstreet.value == "" )
   {
     alert( "Please provide your Street!" );
     document.autoSumForm.repstreet.focus() ;
     return false;
   }
   if( document.autoSumForm.repcity.value == "" )
   {
     alert( "Please provide your City!" );
     document.autoSumForm.repcity.focus() ;
     return false;
   }
  if( document.autoSumForm.reppin.value == "" ||
           isNaN( document.autoSumForm.reppin.value) ||
           document.autoSumForm.reppin.value.length != 6 )
   {
     alert( "Please provide a Pincode in the format 123." );
     document.autoSumForm.custland.focus() ;
     return false;
   }
 var email = document.autoSumForm.repemail.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email==" " || atpos < 1 || ( dotpos - atpos < 2 ))
 {
     alert("Please enter correct email ID")
     document.autoSumForm.repemail.focus() ;
     return false;
 }
 if( document.autoSumForm.repland.value == "" ||
           isNaN( document.autoSumForm.repland.value) ||
           document.autoSumForm.repland.value.length != 10 )
   {
     alert( "Please provide a Lan-Line No in the format 123." );
     document.autoSumForm.custland.focus() ;
     return false;
   }
  if( document.autoSumForm.repmob.value == "" ||
           isNaN( document.autoSumForm.repmob.value) ||
           document.autoSumForm.repmob.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123." );
     document.autoSumForm.repmob.focus() ;
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

<div class="headerplace">You are here >> Sales Engineer Information >> <a href="index1.php?insert_salesEngineer">Add New Sales Engineer </a></div>
	<div class="headercontent">
			<div id="tabs-1"> 
			<p>
   <form name="autoSumForm" onSubmit="return(validate());" action="addsaleengg1.php" method="post" >
   <table id="indextable" width="40%" align="center" >
     <tr>
  <td colspan=2>
     <center><font size=4><b>SALES ENGINEER DETAILS</b></font></center>
  </td>
  </tr>
  <td>NAME</td>
  <td><input type="text" name="repname" id="repname" size="30" required></td>
</tr>
<tr>
  <td>Door NO</td>
  <td><input type="text" name="repdoor"  id="repdoor" size="30" required></td>
</tr>
<tr>
  <td>Street</td>
  <td><input type="text" name="repstreet"  id="repstreet" size="30" required></td>
</tr>
<tr>
  <td>City</td>
  <td><input type="text" name="repcity"  id="repcity" size="30" required></td>
</tr>
<tr>
<tr>
  <td>Pincode</td>
  <td><input type="text" name="reppin"  id="reppin" size="30" required></td>
</tr>
  <td>Mobile No.</td>
  <td><input type="text" name="repmob" id="repmob" size="10" required></td>
</tr>
<tr>
  <td>Land Line Number</td>
  <td><input type="text" name="repland" id="repland" size="10" required></td>
</tr>
<tr>
   <td>E-mail Id</td>
  <td><input type="text" name="repemail" id="repemail" size="30"required></td>
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