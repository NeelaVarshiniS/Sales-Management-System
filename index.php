<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<title>Ausweg Automation</title>

<style type="text/css">
<!--
.style7 {color: #FFFFFF}
.style27 {font-size: 16px}
-->
body{
	background-color: skyblue;
}
table,th{
border: 2px solid grey;
} 
table{
border-spacing:10px;
}
td,tr
{
color:black;
}
</style>
<script>
function validate()
{
   var alpha=/^[a-zA-Z\s-,]+$/;
   var email = document.login.username.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email==" " || atpos < 1 || ( dotpos - atpos < 2 ))
 {
     window.alert("Please enter correct email ID")
     document.login.username.focus() ;
     return false;
 }
  if( document.login.password.value == "" ||
           document.login.password.value.length <= 8 || document.login.password.value.match(alpha))
   {
     alert( "Please provide a password in the correct format ." );
     document.login.password.focus() ;
     return false;
   }
   return ( true );
}
</script
</head>

<body>
<div class="container">
<div class="header">
<?php
include("banner.php");
?> 
  <div class="menubox" align="center">
<div class="loginform" align="center">
<br>
<br>
<br>
<br>
<br>
<form name="login" method="post" onSubmit="return(validate());" action="checkuser.php">
<table width="30%" height="80%"  align="center" >
<tr>
  <td colspan=2>
     <center><font size=4><b>LOGIN FORM</b></font></center>
  </td>
</tr>
<tr>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USERNAME</td>
  <td><input type="text" name="username" id="username" size="30" required=""></td>
</tr>
<tr>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASSWORD</td>
  <td><input type="password" name="password"  id="password" size="30" required=""></td>
</tr>
<tr>
  <td></td>
  <td colspan="2"><input type="submit" value="Login" /></td>
</tr>
</table>
</form>
</div>
</div>
<br>
<br>
<br>
</div>
</div>

</div>
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<center>
<?php include("footer.php");?></center>
</div>

</body>

</html>