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
body { font-size: 15px; }

input { font-size: 18px; }
div { font-size: 17px; }

</style>
<title>AUSWEG AUTOMATION</title>
<script>

function validate()
{
   var alpha=/^[a-zA-Z\s-,]+$/;
   if( document.autoSumForm.custname.value == "" )
   {
     alert( "Please provide your Name!" );
     document.autoSumForm.custname.focus() ;
     return false;
   }
if( !document.autoSumForm.custname.value.match(alpha) )
   {
     alert( "Please provide correct name!" );
     document.autoSumForm.custname.focus() ;
     return false;
   }
   if( document.autoSumForm.date.value == "" )
   {
     alert( "Please provide Date!" );
     document.autoSumForm.date.focus() ;
     return false;
   }
    
   if( document.autoSumForm.custdoor.value == "" )
   {
     alert( "Please provide your Door No!" );
     document.autoSumForm.custdoor.focus() ;
     return false;
   }
   if( document.autoSumForm.custstreet.value == "" )
   {
     alert( "Please provide your Street!" );
     document.autoSumForm.custstreet.focus() ;
     return false;
   }
if( !document.autoSumForm.custmail.value.match(alpha) )
   {
     alert( "Please provide correct address!" );
     document.autoSumForm.custmail.focus() ;
     return false;
   }
 var email = document.autoSumForm.custemail.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email==" " || atpos < 1 || ( dotpos - atpos < 2 ))
 {
     alert("Please enter correct email ID")
     document.autoSumForm.custemail.focus() ;
     return false;
 }
 if( document.autoSumForm.custland.value == "" ||
           isNaN( document.autoSumForm.custland.value) ||
           document.autoSumForm.custland.value.length != 10 )
   {
     alert( "Please provide a Lan-Line No in the format 123." );
     document.autoSumForm.custland.focus() ;
     return false;
   }
  if( document.autoSumForm.custmob.value == "" ||
           isNaN( document.autoSumForm.custmob.value) ||
           document.autoSumForm.custmob.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123." );
     document.autoSumForm.custmob.focus() ;
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

<div class="headerplace">You are here >> Customer Information >> <a href="index1.php?add_customer">Add New Customer </a></div>
<br/>
<br/>
	<div class="headercontent">
			<div id="tabs-1"> 
			<p>
   <form name="autoSumForm" onSubmit="return(validate());" action="addcustind.php" method="post" >
   <table id="indextable" width="40%" align="center" >
     <tr>
  <td colspan=2>
     <center><font size=4><b>NEW CUSTOMER ADDING FORM</b></font></center>
  </td>

<tr>
  <td>CUSTOMER NAME</td>
  <td><input type="text" name="custname" id="custname" size="30" required></td>
</tr>
<tr>
  <td>DATE</td>
  <td><input type="date" name="date"  size="30"  id="d1" required></td>
</tr>
<tr>
  <td>Door No</td>
  <td><input type="text" name="custdoor"  id="custdoor" size="30" required></td>
</tr>
<tr>
  <td>Street</td>
  <td><input type="text" name="custstreet"  id="custstreet" size="30" required></td>
</tr>
<tr>
  <td>City</td>
  <td><input type="text" name="custmail"  id="custmail" size="30" required></td>
</tr>
<tr>
  <td>Customer Mobile No.</td>
  <td><input type="text" name="custmob" id="custmob" size="10" required></td>
</tr>
<tr>
  <td>Customer Land Line Number</td>
  <td><input type="text" name="custland" id="custland" size="10" required></td>
</tr>
<tr>
   <td>Customer E-mail Id</td>
  <td><input type="text" name="custemail" id="custemail" size="30"required></td>
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

</script>


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